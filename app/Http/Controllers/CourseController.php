<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Batch;
class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('batch')->get();
        return response()->json([
            'data' => $courses
        ],200);
    }
}
