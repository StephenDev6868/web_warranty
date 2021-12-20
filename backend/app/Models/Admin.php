<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory;

    public $timestamps = true;

    protected $table = 'admins';

    protected $hidden = [
        'password',
        'password_changed_at',
    ];

    public $fillable = [
        'login_id',
        'email',
        'password',
        'password_changed_at',
        'role',
        'is_privilege',
        'token',
        'name',
    ];
}
