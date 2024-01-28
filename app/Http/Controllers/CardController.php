<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index()
    {
        return view('admin.card.index', [
            'students' => Student::where('card_status', 'Pending')->get()
        ]);
    }

    public function edit($id)
    {
        return view('admin.card.edit', [
            'student' => Student::find($id)
        ]);
    }

    public function detail($id)
    {
        return view('admin.card.detail', [
            'student' => Student::find($id)
        ]);
    }

    public function complete()
    {
        return view('admin.card.complete', [
            'students' => Student::where('card_status', 'Complete')->get()
        ]);
    }

    public function update(Request $request, $id)
    {
        Student::cardUpdate($request, $id);
        return back()->with('message', 'Status update successful');
    }

    public function completeUpdate(Request $request, $id)
    {
        Student::cardUpdate($request, $id);
        if ($request->card_status == 'Complete')
        {
            return redirect('/card/manage')->with('message', 'Status update successful');
        }else if ($request->card_status == 'Received')
        {
            return redirect('/card/complete')->with('message', 'Status update successful');
        }
    }

    public function received()
    {
        return view('admin.card.completed', [
            'students' => Student::where('card_status', 3)->get()
        ]);
    }
}
