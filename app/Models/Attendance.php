<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    public static $attendance, $attendances;

    public static function newAttendance($request, $batch_name)
    {
        if ($request->class_one)
        {
            foreach ($request->class_one as $student_id => $value){
                self::$attendance = new Attendance();
                self::$attendance->batch_name = $batch_name;
                self::$attendance->student_id = $student_id;
                self::$attendance->class_one = $value;
                self::$attendance->date = date('m-d-y');
                self::$attendance->save();
            }
        }elseif ($request->class_two) {

            self::$attendances = Attendance::where('batch_name', $batch_name)
                ->orWhere('date', date('m-d-y'))
                ->get();

            foreach ($request->class_two as $student_id => $value) {

                foreach (self::$attendances as self::$attendance) {

                    self::$attendance->batch_name = $batch_name;
                    self::$attendance->student_id = $student_id;
                    self::$attendance->class_two = $value;
                    self::$attendance->date = date('m-d-y');
                    self::$attendance->save();
                }
            }

        }elseif($request->class_three) {
            foreach ($request->class_three as $student_id => $value) {
                self::$attendance = Attendance::where('student_id', $student_id)
                    ->orWhere('date', date('m-d-y'))
                    ->get();

                self::$attendance->class_three = $value;
                self::$attendance->save();
            }
        }elseif ($request->class_four){
            foreach ($request->class_four as $student_id => $value) {
                self::$attendance = Attendance::where('student_id', $student_id)
                    ->orWhere('date', date('m-d-y'))
                    ->get();

                self::$attendance->class_four = $value;
                self::$attendance->save();
            }
        }elseif($request->class_five){
            foreach ($request->class_five as $student_id => $value) {
                self::$attendance = Attendance::where('student_id', $student_id)
                    ->orWhere('date', date('m-d-y'))
                    ->get();

                self::$attendance->class_five = $value;
                self::$attendance->save();
            }
        }elseif ($request->class_six){
            foreach ($request->class_six as $student_id => $value) {
                self::$attendance = Attendance::where('student_id', $student_id)
                    ->orWhere('date', date('m-d-y'))
                    ->get();

                self::$attendance->class_six = $value;
                self::$attendance->save();
            }
        }
    }
}
