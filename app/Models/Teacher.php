<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    private static $teacher;

    public static function newTeacher($request)
    {
        self::$teacher = new Teacher();
        self::$teacher->name = $request->name;
        self::$teacher->email = $request->email;
        self::$teacher->phone = $request->phone;
        self::$teacher->subject = $request->subject;
        self::$teacher->position = $request->position;
        self::$teacher->age = $request->age;
        self::$teacher->start_date = $request->start_date;
        self::$teacher->salary = $request->salary;
        self::$teacher->save();
    }

    public static function deleteTeacher($id)
    {
        self::$teacher = Teacher::find($id);
        self::$teacher->delete();
    }
}
