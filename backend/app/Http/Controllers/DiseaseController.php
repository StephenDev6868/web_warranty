<?php

namespace App\Http\Controllers;

use App\Services\DiseaseService;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Exception\InternalErrorException;

class DiseaseController extends Controller
{
    //
    public function __construct(DiseaseService $diseaseService)
    {
        $this->diseaseService = $diseaseService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $result =  $this->diseaseService->all();
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
        //
        $result =  $this->diseaseService->create($request);
        return $this->response('', $result);
        throw new InternalErrorException();
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //
        $result =  $this->diseaseService->detail($id);
        return $this->response('', $result);
        throw new InternalErrorException();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //
        $result =  $this->diseaseService->update($request, $id);
        return $this->response('', $result);
        throw new InternalErrorException();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $result =  $this->diseaseService->delete($id);
        return $this->response('', $result);
        throw new InternalErrorException();
    }
}
