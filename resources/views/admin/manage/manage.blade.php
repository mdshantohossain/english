@extends('admin.master')

@section('title')
    Hotel Manage
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center mb-3">All Hotels Information</h3>
                    <h5 class="text-center text-success mb-5">{{ session('message') }}</h5>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                        <tr class="text-center">
                            <th>Sl.</th>
                            <th>Name</th>
                            <th>Ability</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($manages as $manage)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $manage->name }}</td>
                                <td>{{ $manage->ability }}</td>
                                <td>{{ $manage->status == 1 ? 'Active' : '' }}</td>
                                <td>
                                    <a href="{{ route('manage.edit', ['id' => $manage->id]) }}" class="btn btn-outline-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ route('manage.delete', ['id' => $manage->id]) }}" class="btn btn-outline-danger btn-sm">
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
