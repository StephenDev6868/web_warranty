<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QA extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $table = 'qas';

    public $fillable = [
        'question', 'answer'
    ];
}
