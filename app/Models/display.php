<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class display extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'age',
        'phone',
        'address'
    ];

    protected $table = 'display';
}
