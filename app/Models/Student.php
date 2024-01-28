<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public static $admission, $student;


    public static function roll($request)
    {
        if ($request->student_type == 'Residential')
        {
            $student = Student::where('student_type', 'Residential')->orderBy('id', 'desc')->first();
            if ($student)
            {
                $student_id = $student->student_id + 1;
            }else{
                $student_id = 400000;
            }
        }else{
            $student = Student::where('student_type', 'Non-Residential')->orderBy('id', 'desc')->first();
            if ($student)
            {
                $student_id = $student->student_id + 1;
            }else{
                $student_id = 2000;
            }
        }

        return $student_id;

    }

    public static function newAdmission($request)
    {
        $student_id = self::roll($request);
        self::$admission = new Student();
        self::$admission->name = $request->name;
        self::$admission->email = $request->email;
        self::$admission->phone = $request->phone;
        self::$admission->student_id =  $student_id;
        self::$admission->father_name = $request->father_name;
        self::$admission->mother_name = $request->mother_name;
        self::$admission->present_address = $request->present_address;
        self::$admission->permanent_address = $request->permanent_address;
        self::$admission->dob = $request->dob;
        self::$admission->nid = $request->nid;
        self::$admission->blood_group = $request->blood_group;
        self::$admission->gender = $request->gender;
        self::$admission->student_type = $request->student_type;
        self::$admission->batch_name = Batch::newBatch($request, $student_id);
        self::$admission->payment_method = $request->payment_method;
        self::$admission->payment_amount = $request->payment_amount;
        self::$admission->due_amount = $request->due_amount;
        self::$admission->date = date('Y-m-d');
        self::$admission->save();

        return self::$admission;
    }

    public static function updateStudent($request, $id)
    {
        self::$student = Student::find($id);

        if ($request->status == 'Clear')
        {
            self::$student->status = 'Clear';
            self::$student->save();

        }else if ($request->status == 'Running')
        {
            self::$student->status = 'Running';
            self::$student->save();

        }else if ($request->status == 'Complete')
        {
            self::$student->status = 'Complete';
            self::$student->save();

        }else if($request->status == 'Cancel')
        {
            self::$student->status = 'Cancel';
            self::$student->save();
        }
    }

    public static function cardUpdate($request, $id)
    {
        self::$student = Student::find($id);
        self::$student->card_status = $request->card_status;
        self::$student->save();
    }
}
