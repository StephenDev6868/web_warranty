<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supporter extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'supporters';

    public $fillable = [
        'name',
        'process_work',
        'province_id',
        'info_contact',
        'thumbnail',
        'field_operator_id',
        'job_id',
    ];
}
