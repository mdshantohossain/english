<?php

namespace App\Http\Controllers;


use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        return view('admin.question.index');
    }

    public  function create(Request $request)
    {
        Question::newQuestion($request);
       return back()->with('message', 'question create successful');
    }

    public function manage()
    {
        return view('admin.question.manage');
    }

    public function edit($id)
    {
        return view('admin.question.edit', [
            'question' => Question::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        Question::updateQuestion($request, $id);
        return redirect('/question/manage')->with('message', 'Question update successful');
    }

    public function delete($id)
    {
        Question::deleteQuestion($id);
        return back()->with('message', 'Question delete successful');
    }

}
