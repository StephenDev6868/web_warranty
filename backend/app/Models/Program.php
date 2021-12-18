<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Program extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes;

    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'title',
        'content',
        'term',
        'requirement',
        'protection_range',
        'customer_rule',
        'time_waiting',
        'fee',
        'status',
        'started_at',
        'end_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
        'started_at' => 'datetime:Y-m-d',
        'end_at'     => 'datetime:Y-m-d',
    ];

    /**
     * User belongsToMany Uno
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function docs()
    {
        return $this->belongsToMany(
            Document::class,
            'program_docs',
            'program_id',
            'document_id',
            'id',
            'id'
        );
    }

}
