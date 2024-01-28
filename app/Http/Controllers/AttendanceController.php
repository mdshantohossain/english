<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Batch;
use App\Models\Student;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        return view('admin.attendance.batch', [
            'batches' => Batch::where('status', 'Running')
                ->select('batch_name', 'status')
                ->distinct()
                ->get()
        ]);
    }

    public function attendance($name)
    {
        return view('admin.attendance.index', [
            'students' => Student::where('batch_name', $name)->get(),
            'batch_name' => $name
        ]);
    }

    public function manage()
    {
        return view('admin.attendance.batch');
    }

    public function create(Request $request, $batch_name)
    {
        Attendance::newAttendance($request, $batch_name);

        return back()->with('message', "$batch_name attendance submit successful");
    }

    public function edit($name)
    {
        return view('admin.attendance.edit-batch',  [
            'batch' => Batch::where('batch_name', $name)
                ->select('batch_name', 'batch_no', 'status')
                ->distinct()
                ->first()
        ]);
    }

    public function update(Request $request, $name)
    {
        $batches = Batch::where('batch_name', $name)->get();
        foreach ($batches as $batch)
        {
            $batch->status = $request->status;
            $batch->save();
        }

        return back()->with('message', 'Batch Status update successful.');
    }

    public function allBatch()
    {
        return view('admin.attendance.all-batch', [
            'pendingBatches' => Batch::where('status', 'Pending')
                ->orderBy('id', 'desc')
                ->get(),
            'completeBatches' => Batch::where('status', 'Complete')
            ->orderBy('id', 'desc')
        ]);
    }
}
