<?php

namespace App\Http\Controllers;

use App\Services\QAService;
use Illuminate\Http\Request;

class QAController extends Controller
{
    protected $qaService; //

    public function __construct(QAService $qaService)
    {
        $this->qaService = $qaService;
    }
    //
    public function index()
    {
        $results = $this->qaService->listAll();
        return $this->response('', $results);
    }

    public function show($id)
    {
        $results = $this->qaService->showDetail($id);
        return $this->response('', $results);
    }

    public function store(Request $request)
    {
        // dd($request->all(['question', 'answer']));
        $results = $this->qaService->create($request->all(['question', 'answer']));
        return $this->response('', $results);
    }

    public function update(Request $request, $id)
    {
        $result = $this->qaService->update($id, $request->all('question', 'answer'));
        return $this->response('', $result);
    }

    public function destroy($id)
    {
        $result = $this->qaService->delete($id);
        return $this->response('', $result);
    }
}
