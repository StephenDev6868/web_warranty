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
            'program_id', 'title', 'status'
            ])
        ->whereNull('documents.deleted_at');
        if (!empty($request->program_id)) {
            $docs = $docs->where('program_id', $request->program_id);
        }
        // sort
        if (!empty($request->order_by) && !empty($request->direction)) {
            $docs = $docs->orderBy($request->order_by, $request->direction);
        } else {
            $docs = $docs->orderBy('id', 'asc');
        }
        return $docs->paginate($request->per_page);
    }
    public function create($request)
    {
        $program_ids = [];
        $program_ids = $request->program_id;
        $files_data = [];
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
            $file_name = UploadService::upload($this->folderUpload, $value);
            DB::beginTransaction();
            try {
                $doc = Document::create(['file_name' => $file_name]);
                foreach ($program_ids as $key2 => $value2) {
                    ProgramDoc::create(['program_id' => $value2, 'document_id' => $doc->id]);
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
    public function show($id)
    {
    }
    public function delete($id)
    {
    }
}
