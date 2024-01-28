@extends('admin.master')

@section('title')
    Release Student
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h3 class="text-center mb-5">All Release Students Information</h3>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                        <tr class="text-center">
                            <th>Sl.</th>
                            <th>Name</th>
                            <th>Student ID</th>
                            <th>Contact Info</th>
                            <th>Student Type</th>
                            <th>Due</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>v
                        </thead>

                        <tbody>
                        @foreach($students as $student)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->student_id }}</td>
                                <td>{{ $student->email }} <br> {{ '('. $student->phone. ')' }}</td>
                                <td>{{ $student->student_type == 1 ? 'Residential' : 'Non Residential'}}</td>
                                <td>{{ $student->due_amount }}</td>
                                <td>{{ $student->status }}</td>
                                <td>
                                    <a href="{{ route('student.detail', ['id' => $student->id]) }}" class="btn btn-outline-warning btn-sm">
                                        <i class="fa fa-book-open"></i>
                                    </a>
                                    <a href="{{ route('student.edit', ['id' => $student->id]) }}" class="btn btn-outline-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ route('student.delete', ['id' => $student->id]) }}" class="btn btn-outline-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
