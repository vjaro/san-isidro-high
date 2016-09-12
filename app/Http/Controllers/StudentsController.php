<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\App;

class StudentsController extends Controller
{
    public function create()
    {
        return view('students.create');
    }

    public function index()
    {
        $students = Students::all(['id', 'first_name', 'middle_name', 'last_name']);
        return view('students.index')->with('students', $students);
    }
}
