<?php

namespace App\Http\Controllers;

use App\Services\JobOperatorService;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Exception\InternalErrorException;

class JobOperatorController extends Controller
{
    //
    public function __construct(JobOperatorService $jobOperatorService)
    {
        $this->jobOperatorService = $jobOperatorService;
    }

    public function index()
    {
        $results = $this->jobOperatorService->index();
        return $this->response('', $results);
        throw new InternalErrorException();
    }
}
