<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_all_student()
    {
        $data = Student::all();
        return view('student_manage', ['students' => $data]);
    }

    public function get_student_by_id(Student $id)
    {
        return view('student_edit', ['students' => $id]);
    }

    public function edit(Request $req, Student $id)
    {
        $id->update([
            'id' => $req->id,
            'fullname' => $req->fullname,
            'birthday' => $req->birthday,
            'address' => $req->address
        ]);
        return redirect('students');
    }
}
