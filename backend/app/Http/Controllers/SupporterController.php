<?php

namespace App\Http\Controllers;

use App\Services\SupporterService;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Exception\InternalErrorException;

class SupporterController extends Controller
{
    public function __construct(SupporterService $supporterService)
    {
        $this->supporterService = $supporterService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        //
        //
        $results = $this->supporterService->search($request);
        return $this->response('', $results);
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
        $results = $this->supporterService->create($request);
        return $this->response('', $results);
        throw new InternalErrorException();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $results = $this->supporterService->show($id);
        return $this->response('', $results);
        throw new InternalErrorException();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $results = $this->supporterService->update($request, $id);
        return $this->response('', $results);
        throw new InternalErrorException();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $results = $this->supporterService->destroy($id);
        return $this->response('', $results);
        throw new InternalErrorException();
    }
}
