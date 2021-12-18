<?php

namespace App\Services;

use App\Models\Document;
use App\Models\ProgramDoc;
use App\Services\Upload\UploadService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Symfony\Component\CssSelector\Exception\InternalErrorException;
use Illuminate\Support\Facades\Log;

class DocumentService
{
    private $folderUpload = 'programs-doc';
    /**
     */
    public function __construct()
    {
    }

    public function search($request)
    {
        $params = [
            'program_id' => $request->program_id,
            'per_page' => $request->per_page,
            'page' => $request->page,
            'order_by' => $request->order_by,
            'direction' => $request->direction,
        ];
        $validator = Validator::make($params, [
            'program_id' => 'nullable|numeric|exists:programs,id',
            'per_page' => 'numeric|required',
            'page' => 'numeric|required',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        $docs = DB::table('documents')
        ->join('program_docs', 'documents.id', '=', 'program_docs.document_id')
        ->join('programs', 'programs.id', '=', 'program_docs.program_id')
        ->select([
            'documents.id', 'file_name', 'documents.created_at',
            'program_id', 'title', 'status', 'programs.name',
            ])
        ->whereNull('documents.deleted_at');
        if (!empty($request->program_id)) {
            $docs = $docs->where('program_id', $request->program_id);
        }
        // sort
        if (!empty($request->order_by) && !empty($request->direction)) {
            $docs = $docs->orderBy($request->order_by, $request->direction);
        } else {
            $docs = $docs->orderBy('program_id', 'desc');
        }
        return $docs->paginate($request->per_page);
    }
    public function create($request)
    {
        $program_ids = [];
        $program_ids = $request->program_id;
        $files_data = [];
        $name = $request->name_doc;
        $files_data = $request->file_data;
        foreach ($program_ids as $key => $value) {
            $validator1 = Validator::make(['program_id' => $value], [
                'program_id' => 'numeric|exists:programs,id',
            ]);
            if ($validator1->fails()) {
                throw new ValidationException($validator1);
            }
        }
        foreach ($files_data as $key => $value) {
            $validator2 = Validator::make(['file_data' => $value], [
                'file_data' => 'required|max:10240|mimes:jpeg,jpg,png,gif,xlsx,csv,pdf,docx',
            ]);
            if ($validator2->fails()) {
                throw new ValidationException($validator2);
            }
        }
        /**
         * validate success
         * upload file
         * */
        // dd($files_data);
        foreach ($files_data as $key => $value) {
            $file_name = $this->folderUpload . '/' . UploadService::upload($this->folderUpload, $value);
            DB::beginTransaction();
            try {
                $doc = Document::create([
                    'name' => $name,
                    'file_name' => $file_name,
                ]);
                foreach ($program_ids as $key2 => $value2) {
                    ProgramDoc::create([
                        'name' => $name,
                        'program_id' => $value2, 'document_id' => $doc->id
                    ]);
                }
                DB::commit();
            } catch (\Exception $e) {
                Log::error($e->getMessage());
                DB::rollBack();
                throw new InternalErrorException();
            }
        }
        return 'success';
    }
    public function show($id, $program_id)
    {
        $params = [
            'id' => $id,
            'program_id' => $program_id
        ];
        $validator = Validator::make($params, [
            'id' => 'required|numeric|exists:documents,id',
            'program_id' => 'required|numeric|exists:programs,id',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        $doc = DB::table('documents')
        ->join('program_docs', 'documents.id', '=', 'program_docs.document_id')
        ->join('programs', 'programs.id', '=', 'program_docs.program_id')
        ->select([
            'documents.id', 'file_name', 'documents.created_at',
            'program_id', 'title', 'status', 'programs.name'
            ])
            ->where(['documents.id' => $id, 'program_docs.program_id' => $program_id])
        ->whereNull('documents.deleted_at')->first();
        return $doc;
    }


    public function update($request, $id, $program_id)
    {
        $params = [
            'id' => $id,
            'program_id' => $program_id,
            'file_data' => $request->file_data,
        ];
        $validator = Validator::make($params, [
            'id' => 'required|numeric|exists:documents,id',
            'program_id' => 'required|numeric|exists:programs,id',
            'file_data' => 'nullable|max:10240|mimes:jpeg,jpg,png,gif,xlsx,csv,pdf,docx',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }


        try {
            $doc = Document::find($id);

            if ($request->hasFile('file_data')) {
                // has 1 or many
                $program_docs = ProgramDoc::where('document_id', $id)->whereNull('deleted_at')->get();
                // has 1 record
                $size_programdoc = sizeof($program_docs);
                //delete file when size of
                if ($size_programdoc == 1) {
                    UploadService::deleteFile($this->folderUpload, $doc->file_name);
                }
                $file_name = $this->folderUpload . '/' . UploadService::upload($this->folderUpload, $request->file_data);
                $doc->file_name = $file_name;
                $doc->save();
            }
            return $doc;
        } catch (\Exception $exception) {
            throw new \Exception($exception);
        }
    }


    public function delete($id, $program_id)
    {
        $params = [
            'id' => $id,
            'program_id' => $program_id
        ];
        $validator = Validator::make($params, [
            'id' => 'required|numeric|exists:documents,id',
            'program_id' => 'required|numeric|exists:programs,id',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        $doc = Document::find($id);
        // has 1 or many
        $program_docs = ProgramDoc::where('document_id', $id)->whereNull('deleted_at');
        // has 1 record
        $delete_doc = $program_docs->where('program_id', $program_id)->first();
        $size_programdoc = sizeof($program_docs->get());
        //delete file when size of
        if ($size_programdoc == 1) {
            UploadService::deleteFile($this->folderUpload, $doc->file_name);
        }

        $delete_doc->delete();
        $doc->delete();
        return 'Delete success';
    }

    public function download($id)
    {
        $params = [
            'id' => $id,
        ];
        $validator = Validator::make($params, [
            'id' => 'required|numeric|exists:documents,id',
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        try {
            ///
            $doc = Document::find($id);
            $path = public_path('upload/' . $this->folderUpload.'/'.$doc->file_name);
            $headers = [
                // 'Content-Type: application/pdf'
            ];
            return response()->file($path, $headers);
        } catch (\Exception $exception) {
            throw new \Exception($exception);
        }
    }
}
