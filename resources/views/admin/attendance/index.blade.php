@extends('admin.master')

@section('title')
    Attendance
@endsection

@section('body')
    {{ date('m-d-y') }}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h3 class="text-center mb-3">Attendance Sheet</h3>
                    <h4 class="text-center mb-3">{{ $batch_name }}</h4>
                    <h5 class="text-end mb-5">Date: {{ date('m-d-y') }}</h5>
                    <form action="{{ route('attendance.create', ['batch_name' => $batch_name]) }}" method="POST">
                        @csrf
                        <table  class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr class="text-center">
                                <th>Sl.</th>
                                <th>Name</th>
                                <th>Student ID</th>
                                <th>Class 1</th>
                                <th>Class 2</th>
                                <th>Class 3</th>
                                <th>Class 4</th>
                                <th>Class 5</th>
                                <th>Class 6</th>
                                <th>Leave</th>
                            </tr>
                            </thead>

                            <tbody>

                                @foreach($students as $student)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ substr($student->name, 0, 25) }}</td>
                                        <td>{{ $student->student_id }}</td>
                                        <td>
                                            <span class="btn btn-outline-success btn-sm">
                                                <input type="radio" value="1" name="class_one[{{ $student->student_id }}]" />
                                            </span>
                                            <span class="btn btn-outline-danger btn-sm">
                                                <input type="radio" value="2" name="class_one[{{ $student->student_id }}]" />
                                            </span>
                                        </td>
                                        <td>
                                             <span class="btn btn-outline-success btn-sm">
                                                <input type="radio" value="1" name="class_two[{{ $student->student_id }}]" />
                                            </span>
                                            <span class="btn btn-outline-danger btn-sm">
                                                <input type="radio" value="2" name="class_two[{{ $student->student_id }}]" />
                                            </span>
                                        </td>
                                        <td>
                                             <span class="btn btn-outline-success btn-sm">
                                                <input type="radio" value="1" name="class_three[{{ $student->student_id }}]" />
                                            </span>
                                            <span class="btn btn-outline-danger btn-sm">
                                                <input type="radio" value="2" name="class_three[{{ $student->student_id }}]" />
                                            </span>
                                        </td>
                                        <td>
                                             <span class="btn btn-outline-success btn-sm">
                                                <input type="radio" value="1" name="class_four[{{ $student->student_id }}]" />
                                            </span>
                                            <span class="btn btn-outline-danger btn-sm">
                                                <input type="radio" value="2" name="four[{{ $student->student_id }}]" />
                                            </span>
                                        </td>
                                        <td>
                                             <span class="btn btn-outline-success btn-sm">
                                                <input type="radio" value="1" name="class_five[{{ $student->student_id }}]" />
                                            </span>
                                            <span class="btn btn-outline-danger btn-sm">
                                                <input type="radio" value="2" name="class_five[{{ $student->student_id }}]" />
                                            </span>
                                        </td>
                                        <td>
                                             <span class="btn btn-outline-success btn-sm">
                                                <input type="radio" value="1" name="class_six[{{ $student->student_id }}]" />
                                            </span>
                                            <span class="btn btn-outline-danger btn-sm">
                                                <input type="radio" value="2" name="class_six[{{ $student->student_id }}]" />
                                            </span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-outline-warning btn-sm">
                                                <i class="fa fa-arrow-left"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            <button type="submit" class="btn btn-success btn-lg">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
