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
                    <th>Email</th>
                    <th>{{ $student->email }}</th>
                </tr>
                <tr>
                    <th>Phone</th>
                    <th>{{ $student->phone }}</th>
                </tr>
                <tr>
                    <th>Date Of Birth</th>
                    <th>{{ $student->dob }}</th>
                </tr>
                <tr>
                    <th>NID Number </th>
                    <th>{{ $student->nid }}</th>
                </tr>
                <tr>
                    <th>Father's Name </th>
                    <th>{{ $student->father_name }}</th>
                </tr>
                <tr>
                    <th>Mother's Name</th>
                    <th>{{ $student->mother_name }}</th>
                </tr>
                <tr>
                    <th>Present Address</th>
                    <th>{{ $student->present_address }}</th>
                </tr>
                <tr>
                    <th>Permanent Address</th>
                    <th>{{ $student->permanent_address }}</th>
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
                    <th>Card</th>
                    <th>{{ $student->card_status }}</th>
                </tr>
                <tr>
                    <th>Payment Method</th>
                    <th> <?php
                        if ($student->payment_method == 1){
                            echo 'Cash On';
                        }else if ($student->payment_method == 2){
                            echo 'Bikash';
                        }else if ($student->payment_method == 3){
                            echo 'Nagad';
                        }else if ($student->payment_method == 4){
                            echo 'Rocket';
                        }else if ($student->payment_method == 5){
                            echo 'Bank';
                        }else if ($student->payment_method == 6){
                            echo 'Check';
                        }
                        ?></th>
                </tr>
                <tr>
                    <th>Pay Amount </th>
                    <th>{{ $student->payment_amount }}</th>
                </tr>
                <tr>
                    <th>Due Amount</th>
                    <th>{{ isset($student->due_amount) ? $student->due_amount : 'Clear' }}</th>
                </tr>
            </table>
        </div>
    </div>
@endsection
