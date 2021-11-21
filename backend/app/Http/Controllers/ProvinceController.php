<?php

namespace App\Http\Controllers;

use App\Services\ProvinceService;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Exception\InternalErrorException;

class ProvinceController extends Controller
{
    //
    public function __construct(ProvinceService $provinceService)
    {
        $this->provinceService = $provinceService;
    }

    public function index()
    {
        $results = $this->provinceService->index();
        return $this->response('', $results);
        throw new InternalErrorException();
    }
}
