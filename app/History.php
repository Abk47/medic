<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = [
        'Insurer & Policy No',
        'Qsn1',
        'Qsn2',
        'Qsn3',
        'Qsn4',
        'Qsn5',
        'Qsn6',
        'Qsn7',
        'Qsn8',
        'Qsn9',
        'DoctorName',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
