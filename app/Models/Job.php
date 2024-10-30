<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Job
 *
 * @package App\Models
 */
class Job extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'type',
        'description',
        'hours_start',
        'hours_end',
    ];

    public function scopeGetAllJobs(Builder $builder)
    {
        $builder->where('deleted_at', null);
    }
}
