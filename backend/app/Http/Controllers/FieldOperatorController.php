<?php

namespace App\Http\Controllers;

use App\Services\FieldOperatorService;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Exception\InternalErrorException;

class FieldOperatorController extends Controller
{
    //
    public function __construct(FieldOperatorService $fieldOperatorService)
    {
        $this->fieldOperatorService = $fieldOperatorService;
    }

    public function index()
    {
        $results = $this->fieldOperatorService->index();
        return $this->response('', $results);
        throw new InternalErrorException();
    }
}
