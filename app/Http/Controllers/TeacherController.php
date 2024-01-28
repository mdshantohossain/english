<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('admin.teacher.index');
    }

    public function create(Request $request)
    {
        Teacher::newTeacher($request);
        return back()->with('message', 'Teacher add successful');
    }

    public function manage()
    {
        return view('admin.teacher.manage', [
            'teachers' => Teacher::all()
        ]);
    }

    public function delete($id)
    {
        Teacher::deleteTeacher($id);
        return back()->with('message', 'Teacher delete successful');
    }
}
