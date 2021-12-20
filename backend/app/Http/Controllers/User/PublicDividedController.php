<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Disease;
use App\Models\Program;
use App\Models\Wallet;
use Illuminate\Support\Carbon;

class PublicDividedController extends Controller
{
    /**
     * Index
     *
     * @return mixed
    */
    public function index()
    {
        return View('components.public-divided', [
            'programs' => $this->getInfoRegisterForPrograms(),
        ]);
    }

    /**
     * Index
     *
     * @return mixed
     */
    public function full()
    {
        return View('components.public-divided-full', [
            'programs' => $this->getFullInfoRegisterForPrograms(),
            'disease'  => $this->disease(),
        ]);
    }

    /**
     * Index
     *
     * @return mixed
     */
    public function disease()
    {
        return Disease::all();
    }

    /**
     * Get Info Register For Programs
     *
     * @return mixed
     */
    public function getFullInfoRegisterForPrograms()
    {
        $programs = $this->programs();

        foreach ($programs as $program) {
            $users =  $program->users()
                ->get([
                    'users.id',
                    'users.user_name',
                    'users.birthday',
                    'users.sex',
                    'user_program_registers.created_at',
                ]);
            $program['count'] = count($users);
            $program['user'] = array_map(function ($user) use ($program) {
                return [
                    "user_name" => $user['user_name'],
                    "birthday" => Carbon::parse($user['birthday'])->diffInYears(Carbon::now()),
                    "sex" => $user['sex'],
                    "vnd_nums" => optional(Wallet::query()->where('user_id', $user['id'])->first())->vnd_nums ?? 0,
                    "created_at" => Carbon::parse($user['created_at'])->format('d/m/Y'),
                ];
            }, $users->toArray());

            $program['user'] = array_chunk($program['user'], 2);
        }
        return $programs;
    }

    /**
     * Get Info Register For Programs
     *
     * @return mixed
    */
    public function getInfoRegisterForPrograms()
    {
        $programs = $this->programs();

        foreach ($programs as $program) {
            $users =  $program->users()
                ->limit(14)
                ->get([
                'users.id',
                'users.user_name',
                'users.birthday',
                'users.sex',
                'user_program_registers.created_at',
            ]);
            $program['count'] = count($users);
            $program['user'] = array_map(function ($user) use ($program) {
                return [
                    "user_name" => $user['user_name'],
                    "birthday" => Carbon::parse($user['birthday'])->diffInYears(Carbon::now()),
                    "sex" => $user['sex'],
                    "vnd_nums" => optional(Wallet::query()->where('user_id', $user['id'])->first())->vnd_nums ?? 0,
                    "created_at" => Carbon::parse($user['created_at'])->format('d/m/Y'),
                ];
            }, $users->toArray());

            $program['user'] = array_chunk($program['user'], 2);
        }
        return $programs;
    }

    /**
     * Programs
     *
     * @return mixed
     */
    public function programs()
    {
        return Program::query()
            ->limit(3)
            ->orderBy('programs.created_at', 'desc')
            ->get(['programs.id', 'programs.name']);
    }
}
