<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index()
    {
        $availableStudents = Student::where('status', 'pending')->get();
        $enrolledStudents = Student::where('status', 'enrolled')->get();
        
        return view('enrollment.index', compact('availableStudents', 'enrolledStudents'));
    }
} 