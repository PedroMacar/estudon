<?php

namespace App\Models\Instructor;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'image',
    ];
}
