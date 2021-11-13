<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AdminService;
use Illuminate\Http\Resources\Json\JsonResource;

class AdminController extends Controller
{
    /**
     * AdminService
     *
     * @var AdminService $adminService AdminService
    */
    public $adminService;

    /**
     * AdminController Constructor
     *
     * @param AdminService $adminService AdminService
     *
    */
    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    /**
     * Login
     *
     * @param Request $request Request
     *
     * @return mixed|\Illuminate\Http\JsonResponse
     *
     * @throws \Exception
     * @throws \App\Exceptions\BusinessException
     * @throws \Illuminate\Validation\ValidationException;
    */
    public function login(Request $request)
    {
        $credentials = $request->all([
            'login_id',
            'password'
        ]);

        $results = $this->adminService->login($credentials);

        return $this->response('', $results);
    }

    /**
     * List adminer
     *
     * @return mixed|\Illuminate\Http\JsonResponse
    */
    public function index()
    {
        $results = $this->adminService->listAll();

        return $this->response('', $results);
    }
}
