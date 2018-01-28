<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    const MARITAL_STATUS = [
        1 => 'Solteiro',
        2 => 'Casado',
        3 => 'Divorciado'
    ];

    protected $fillable = [
        'name',
        'cpf',
        'email',
        'phone',
        'date_birth',
        'sex',
        'marital_status',
    ];
}
