<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StudentsController extends Controller
{
    public function create()
    {
        return view('students.create');
    }

    public function index()
    {
        return view('students.index');
    }
}
