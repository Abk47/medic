<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    protected $fillable = [
        'form_submit','form_status'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
