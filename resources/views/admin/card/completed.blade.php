@extends('admin.master')

@section('title')
     completed card
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h3 class="text-center mb-3">All Card Received Students</h3>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                        <tr class="text-center">
                            <th>Sl.</th>
                            <th>Name</th>
                            <th>Student ID</th>
                            <th>Type</th>
                            <th>Batch No</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($students as $student)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->student_id }}</td>
                                <td>{{ $student->student_type == 1 ? 'Residential' : 'Non Residential'}}</td>
                                <td>{{ $student->batch_no}}</td>
                                <td>
                                    {{ $student->card_status == 3 ? 'Received' : ''}}
                                </td>
                                <td>
                                    <a href="{{ route('card.detail', ['id' => $student->id]) }}" class="btn btn-outline-warning btn-sm">
                                        <i class="fa fa-book-open"></i>
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
