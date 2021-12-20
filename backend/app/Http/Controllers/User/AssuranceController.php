<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;

class AssuranceController extends Controller
{
    /**
     * Index
     *
     * @return mixed
    */
    public function index()
    {
        $programs = $this->programs();

        foreach ($programs as $item) {
            $documents = $item->docs()->get(['documents.id', 'documents.file_name', 'documents.name'])->toArray();
            $item['docs'] = array_map(function ($document) {
                return [
                    'file_name' => env('UPLOAD_URL') . $document['file_name'],
                    'name'      => $document['name'],
                    'type'      => ''
                ];
            }, $documents);
        }

        return view('components.assurance', [
            'programs' => $programs,
        ]);
    }

    /**
     * Programs
     *
     * @return mixed
    */
    public function programs()
    {
        return Program::query()
            ->limit(3)
            ->orderBy('programs.created_at', 'desc')
            ->get(['programs.*']);
    }

    /**
     * Get type File
     *
     * @param string $fileName File Name
     *
     * @return integer
    */
    protected function getTypeFile(string $fileName)
    {

    }
}
