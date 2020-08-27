<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependant extends Model
{
    protected $fillable = [
        'full_name','DOB','identification','relationship'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
