<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\Instructor\Course;
use Illuminate\Http\{RedirectResponse};

class CourseController extends Controller
{
    public function store(): RedirectResponse
    {

        Course::create([
            'title'       => request('title'),
            'description' => request('description'),
        ]);

        return redirect()->route('dashboard');
    }
}
