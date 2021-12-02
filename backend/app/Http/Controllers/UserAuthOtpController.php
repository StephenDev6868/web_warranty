<?php

namespace App\Http\Controllers;

use App\Models\UserAuthOtp;
use Illuminate\Http\Request;
use App\Services\UserAuthOtpService;

class UserAuthOtpController extends Controller
{
    /**
     * UserAuthOtpService
     *
     * @var UserAuthOtpService
    */
    protected $userAuthOtpService;

    /**
     * UserAuthOtpController constructor
     *
     * @param UserAuthOtpService $userAuthOtpService $userAuthOtpService
    */
    public function __construct(UserAuthOtpService $userAuthOtpService)
    {
        $this->userAuthOtpService = $userAuthOtpService;
    }

    /**
     * Get list otps
     *
     * @param Request $request Requests
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function index(Request $request)
    {
        $inputs = $request->all([
            'phone_nums',
            'monthly',
        ]);

        $result = $this->userAuthOtpService->getListOtps($inputs);

        return $this->response('', $result);
    }
}
