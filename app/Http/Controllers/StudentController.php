<?php

namespace App\Http\Controllers;

use App\Mail\EmailMail;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StudentController extends Controller
{
    public function index()
    {
        return view('admin.student.register');
    }

    public function create(Request $request)
    {
        $student = Student::newAdmission($request);

        $data = [
            'name' => $student->name,
            'subject' => 'Registration successful to English Therapy',
            'title' => 'Registration successful',
            'body' => 'your registration successful. when your class will start we will inform you. Thank you. '
        ];

        Mail::to($student->email)->send(new EmailMail($data));

        return redirect()->route('form.print', ['id' => $student->id]);

    }

    public function formPrint($id)
    {
        return view('admin.student.print', ['student' => Student::find($id)]);
    }

    public function manage()
    {
        return view('admin.student.manage', [
            'students' => Student::where('status', 'Pending')
                ->get()
        ]);
    }

    public function edit($id)
    {
        return view('admin.student.edit', ['student' => Student::find($id)]);
    }

    public function detail($id)
    {
        return view('admin.student.detail', ['student' => Student::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Student::updateStudent($request, $id);
        return redirect('/student/manage')->with('message', 'Student update successful');
    }

    public function delete($id)
    {

    }

    public function complete()
    {
        return view('admin.student.complete', [
            'students' => Student::where('status', 'Complete')
                ->orWhere('status', 'Cancel')
                ->get()
        ]);
    }

    public function clear()
    {
        return view('admin.student.clear', [
            'students' => Student::where('status', 'Clear')
                ->orderBy('id', 'desc')
                ->get()]);
    }

    public function release()
    {
        return view('admin.student.release', [
            'students' => Student::where('status', 'Running')
            ->get()
        ]);
    }
}
