@extends('admin.master')

@section('title')
    Teacher - manage
@endsection

@section('body')

        <div class="row">
            <div class="col-12 col-xl-12 mx-auto">
                <div class="card">
                    <div class="card-body">

                        <h3 class="text-center mb-3">All Teachers Information</h3>
                        <h5 class="text-center mb-5">{{ session('message') }}</h5>

                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr class="text-center">
                                <th>Sl.</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Subject</th>
                                <th>Age</th>
                                <th>Position</th>
                                <th>Salary</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($teachers as $teacher)
                                <tr class="text-center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->email }} <br> ({{ $teacher->phone }})</td>
                                    <td>{{ $teacher->subject}}</td>
                                    <td>{{ $teacher->age }}</td>
                                    <td>{{ $teacher->position }}</td>
                                    <td>{{ $teacher->salary }}</td>
                                    <td>
                                        <a href="{{ route('teacher.delete', ['id' => $teacher->id]) }}" class="btn btn-outline-danger btn-sm">
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
