<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $filable=[
        'fname',
        'lname',
        'email'
    ];

    protected $dates = ['deleted_at'];
}
