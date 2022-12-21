<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'document',
        'name',
        'last_name',
        'phone_number',
        'email',
        'address',
        'city',
    ];
}
