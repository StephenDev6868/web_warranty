<?php

namespace App\Http\Middleware;

use App\Exceptions\UserAuthException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request Request
     * @return string|null
     *
     * @throws UserAuthException
     */
    protected function redirectTo($request)
    {
        if (! Auth::guard('user')->check()) {
            throw new UserAuthException();
        }

        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
