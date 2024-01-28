@extends('admin.master')

@section('title')
    Student Detail
@endsection

@section('body')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h3 class="text-center mb-4">Student Detail</h3>
            <table class="table table-hover table-bordered">
                <tr>
                    <th>Student ID.</th>
                    <th>{{ $student->student_id }}</th>
                </tr>
                <tr>
                    <th>Full Name</th>
                    <th>{{ $student->name }}</th>
                </tr>
                <tr>
                    <th>Date Of Birth</th>
                    <th>{{ $student->dob }}</th>
                </tr>
                <tr>
                    <th>Blood Group</th>
                    <th>{{ $student->blood_group }}</th>
                </tr>
                <tr>
                    <th>Gender</th>
                    <th>{{ $student->gender }}</th>
                </tr>
                <tr>
                    <th>Student Type</th>
                    <th>{{ $student->student_type == 1 ? 'Residential' : 'Non Residential'}}</th>
                </tr>
                <tr>
                    <th>Batch No</th>
                    <th>{{ $student->batch_no}}</th>
                </tr>
                <tr>
                    <th>Card</th>
                    <th>{{ $student->card_status}}
                    </th>
                </tr>
            </table>
        </div>
    </div>
@endsection
