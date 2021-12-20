<?php

namespace App\Http\Controllers;

use App\Services\DocumentService;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Exception\InternalErrorException;

class DocumentController extends Controller
{
    //

    public function __construct(DocumentService $documentService)
    {
        $this->documentService = $documentService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        //
        // dd($request->program_id);
        $result =  $this->documentService->search($request);
        return $this->response('', $result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $result =  $this->documentService->create($request);
        return $this->response('', $result);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $program_id)
    {
        //
        $result =  $this->documentService->show($id, $program_id);
        return $this->response('', $result);
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request $request
    * @param  int                      $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id, $program_id)
    {
        //
        $result =  $this->documentService->update($request, $id, $program_id);
        return $this->response('', $result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $program_id)
    {
        //
        $result =  $this->documentService->delete($id, $program_id);
        return $this->response('', $result);
    }

    public function download($id)
    {
        //
        return $this->documentService->download($id);
    }
}
