<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Compensation extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'compensations';

    public $fillable = [
        'province_id',
        // 'compensation_doc_id',
        'compensation_package',
        'treatment_type',
        'date_start',
        'date_end',
        'hospital',
        'disease',
        'package_id'
    ];
}
