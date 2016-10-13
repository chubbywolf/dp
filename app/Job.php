<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Job extends Model
{
    use SoftDeletes;
    
    protected $table = 'jobs';
    
    protected $fillable = ['company',
                           'company_address',
                           'job_title',
                           'job_details',
                           'requirement',
                           'responsibilities',
                           'post_date',
                           'end_date',
                           'job_location',
                           'working_date',
                           'working_time',
                           'wages',
                           'job_type',
                           'distance',
                           'latitude',
                           'longitude',
        
    ];
    
    protected $dates = ['deleted_at'];
    
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($model) {
            $user = Auth::user();
            $model->user_id = $user->id;
        });

        static::updating(function ($model) {
            if (Auth::check()) {
                $user = Auth::user();
                $model->user_id = $user->id;
            }
        });
    }
    
    
}
