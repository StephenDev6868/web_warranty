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
        throw new InternalErrorException();
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
        throw new InternalErrorException();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $result =  $this->documentService->detail($id);
        return $this->response('', $result);
        throw new InternalErrorException();
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        //
        $result =  $this->documentService->update($request, $id);
        return $this->response('', $result);
        throw new InternalErrorException();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $program_id)
    {
        //
        $result =  $this->documentService->delete($id, $program_id);
        return $this->response('', $result);
        throw new InternalErrorException();
    }
}
