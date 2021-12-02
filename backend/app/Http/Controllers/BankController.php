<?php

namespace App\Http\Controllers;

use App\Services\BankService;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Exception\InternalErrorException;

class BankController extends Controller
{
    public function __construct(BankService $bankService)
    {
        $this->bankService = $bankService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $result =  $this->bankService->all();
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
        $result =  $this->bankService->create($request);
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
        $result =  $this->bankService->detail($id);
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
        $result =  $this->bankService->update($request, $id);
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
        $result =  $this->bankService->delete($id);
        return $this->response('', $result);
        throw new InternalErrorException();
    }
}
