<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confidential extends Model
{
    protected $fillable = [
        'NameRelation',
        'QsnID',
        'Medical',
        'Treatment',
        'DoctorsInfo',
        'FutureTreatment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
