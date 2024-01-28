<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public static $question;

    public static function newQuestion($request)
    {

        for ($i = 0; $i < count($request->title); $i++)
        {
            $title = [$request->title[$i] ];
            $body = [];
            $point = [];
        }
        foreach ($request->titles as $title)
        {
            self::$question = new Question();
            self::$question->title = $request->title;
            self::$question->body = $request->body;
            self::$question->point = $request->point;
            self::$question->exam_name = $request->exam_name;
            self::$question->save();
        }
    }

    public static function updateQuestion($request, $id)
    {
        self::$question = Question::find($id);
        self::$question->title = $request->title;
        self::$question->body = $request->body;
        self::$question->point = $request->point;
        self::$question->exam_name = $request->exam_name;
        self::$question->save();
    }

    public static function deleteQuestion($id)
    {
        self::$question = Question::find($id);
        self::$question->delete();
    }
}
