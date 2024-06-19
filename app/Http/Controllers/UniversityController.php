<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class UniversityController extends Controller
{
    //
    public function index() : View
    {
        return view('students.index', [
        'students' => student::latest()->paginate(5)
        ]);
    }
}
