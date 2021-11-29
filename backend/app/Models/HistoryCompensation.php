<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HistoryCompensation extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = true;

    protected $table = 'history_compensations';

    public $fillable = [
       'compensation_id',
       'user_id',
       'notify_date',
       'mount_request',
       'doc_code',
       'assurance_type',
       'mount_pay',
       'reason_reduce',
       'status'
    ];
}
