<?php

namespace App\Http\Controllers;

use App\Exceptions\BusinessException;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\UserService;

class UserController extends Controller
{
    /**
     * UserService
     *
     * @var UserService
    */
    public $userService;

    /**
     * UserController constructor
     *
     * @param UserService $userService UserService
    */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request Request
     *
     * @return JsonResponse
     * @throws \Exception
     */
    public function index(Request $request)
    {
        $inputs = $request->all([
            'phone_nums',
            'user_name',
            'email',
            'id_card_num',
            'hi_card_num',
            'limit'
        ]);
        $user = $this->userService->getList($inputs);

        return $this->response('', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param User    $user    User
     * @param Request $request Request
     *
     * @return JsonResponse
     */
    public function store(User $user, Request $request)
    {
        $inputs = $request->all([
            'id',
            'phone_nums',
            'user_name',
            'email',
            'id_card_num',
            'hi_card_num',
            'birthday',
            'phone_num_parent',
            'sex',
        ]);

        $results = $this->userService->update($user, $inputs);

        return $this->response('', $results);
    }

    /**
     * Display the specified resource.
     *
     * @param User $user User
     *
     * @return mixed|JsonResponse
     */
    public function show(User $user)
    {
        $user['wallet'] = $user->wallet()->first();

        return $this->response('', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  User                     $user    User
     * @param  \Illuminate\Http\Request $request Request
     * @return \Illuminate\Http\Response
     */
    public function update(User $user, Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user User
     *
     * @return JsonResponse
     */
    public function destroy(User $user)
    {
        $this->userService->delete($user);

        return $this->responseNoContent();
    }
}
