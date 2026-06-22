<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
// use App\Models\Student;
use App\Models\Slider;

class Dashboard extends Controller
{
      public function index()
{
    $teacherCount = Teacher::count();
    // $studentCount = Student::count();
    $sliderCount = Slider::count();

    return view('admin.layouts.index', compact(
        'teacherCount',
        // 'studentCount',
        'sliderCount'
    ));
}
}
