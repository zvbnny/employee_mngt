<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'emplyoee_tb';
    protected $fillable = [
        'fname',
        'midname',
        'lname',
        'age',
        'address',
        'zip'
    ];
}
