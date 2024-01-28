@extends('admin.master')

@section('title')
    All Batch
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center mb-3">All Pending Batches</h3>
                    <table class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                        <tr class="text-center">
                            <th>Sl.</th>
                            <th>Batch No</th>
                            <th>Total Student</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($pendingBatches as $batch)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $batch->batch_name }}</td>
                                <td>{{ $batch->batch_name }}</td>
                                <td>{{ $batch->status }}</td>
                                <td>
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

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center mb-3">All Complete Batches</h3>
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
                        @foreach($completeBatches as $batch)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $batch->batch_name }}</td>
                                <td>{{ $batch->status }}</td>
                                <td>
                                    <a href="{{ route('batch.detail', ['name' => $batch->batch_name]) }}" class="btn btn-outline-success btn-sm">
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
