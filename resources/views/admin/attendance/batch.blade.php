@extends('admin.master')

@section('title')
    Attendance Batch
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center mb-3">All Attendance Batch</h3>
                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                        <tr class="text-center">
                            <th>Sl.</th>
                            <th>Batch No</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($batches as $batch)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $batch->batch_name }}</td>
                                <td>{{ $batch->status }}</td>
                                <td>
                                    <a href="{{ route('attendance.sheet', ['name' => $batch->batch_name]) }}" class="btn btn-outline-success btn-sm">
                                       Attendance Sheet
                                    </a>
                                    <a href="{{ route('batch.edit', ['name' => $batch->batch_name]) }}" class="btn btn-outline-warning btn-sm">
                                        <i class="fa fa-edit"></i>
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
