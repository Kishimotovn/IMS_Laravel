<?php

namespace App\Http\Controllers;

use App\Student;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class UserController extends Controller
{
    function showStudent($student_id) {
        $student = Student::findOrFail($student_id);
        return view('users.students.show', compact('student'));
    }

    function showAllStudents()
    {
        $students = Student::latest('id')->get();

        return view('users.students.index', compact('students'));
    }

    function createStudent()
    {
        return view('users.students.create');
    }

    function storeStudent() {
        $student = Student::Create(Request::all());

        $student->save();

        return redirect('students');
    }
}
