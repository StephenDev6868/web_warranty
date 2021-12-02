<?php

namespace App\Http\Controllers;

use App\Exceptions\BusinessException;
use App\Services\NewsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\CssSelector\Exception\InternalErrorException;

class NewsControler extends Controller
{
    protected $newsService; //
    public function __construct(NewsService $newsService)
    {
        $this->newsService = $newsService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        //
        $results = $this->newsService->search($request);
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
        $results = $this->newsService->create($request);
        return $this->response('', $results);
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
        $results = $this->newsService->show($id);
        return $this->response('', $results);
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
        $results = $this->newsService->update($request, $id);
        return $this->response('', $results);
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
        $results = $this->newsService->delete($id);
        return $this->response('', $results);
        throw new InternalErrorException();
    }
}
