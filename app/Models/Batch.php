<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Batch extends Model
{
    use HasFactory;

    public static $batch;

    public static function batchNo($request)
    {

        if ($request->student_type == 'Residential')
        {
            self::$batch = Batch::where('student_type', 'Residential')->orderBy('id', 'desc')->first();
            if (self::$batch)
            {
                if (self::$batch->ability >= 3)
                {
                    $batch = [
                      'batch_no' => self::$batch->batch_no + 1,
                        'ability' => 1
                    ];

                }else{

                    $batch = [
                        'batch_no' => self::$batch->batch_no ,
                        'ability' => self::$batch->ability + 1
                    ];
                }
            }else{
                $batch = [
                  'batch_no' =>  10,
                    'ability' => 1,
                ];

            }
        }else{
            self::$batch = Batch::where('student_type', 'Non-Residential')->orderBy('id', 'desc')->first();
            if (self::$batch)
            {
                if (self::$batch->ability >= 3)
                {
                    $batch = [
                        'batch_no' => self::$batch->batch_no + 1,
                        'ability' => 1
                    ];
                }else{

                    $batch = [
                        'batch_no' =>self::$batch->batch_no,
                        'ability' => self::$batch->ability + 1
                    ];
                }
            }else{

                $batch = [
                  'batch_no' => 20,
                  'ability' => 1
                ];
            }
        }

        return $batch;
    }


    public static function newBatch($request, $id)
    {
        if ($request->student_type == 'Residential')
        {
            $batch_no = self::batchNo($request);
            $batch_name = 'RACE-'. $batch_no['batch_no'];
        }else{
            $batch_no = self::batchNo($request);
            $batch_name = 'NOR-'. $batch_no['batch_no'];
        }

        self::$batch = new Batch();
        self::$batch->batch_no = $batch_no['batch_no'];
        self::$batch->batch_name = $batch_name;
        self::$batch->student_type = $request->student_type;
        self::$batch->student_id = $id;
        self::$batch->ability = $batch_no['ability'];
        self::$batch->date = date('m-d-Y');
        self::$batch->save();


       return self::$batch->batch_name ;
    }

    public function students(): HasMany
    {
        return  $this->hasMany(Student::class);
    }
}
