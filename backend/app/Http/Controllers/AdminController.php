<?php

namespace App\Http\Controllers;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use App\Services\AdminService;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

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
     * Logout
     *
     * @return mixed|\Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        $this->adminService->logout();

        return $this->responseNoContent();
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

    /**
     * Get admin info
     *
     * @return mixed
     * @throws AuthenticationException
     */
    public function getDetail()
    {
        $admin = Auth::user();
        if (! $admin) {
            throw new AuthenticationException();
        }

        return $this->response('', $admin);
    }
}
