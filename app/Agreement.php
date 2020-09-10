<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    protected $fillable = [
        'submit'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
