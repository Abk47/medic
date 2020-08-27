<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'user_id',
        'company',
        'surname',
        'other_names',
        'user_email',
        'DOB',
        'passport',
        'home_location',
        'work_location',
        'occupation',
        'address',
        'house_no',
        'mobile_no',
        'user_email',
        'office_no'
    ];

    protected $primaryKey = 'user_id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
