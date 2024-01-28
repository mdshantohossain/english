@extends('admin.master')

@section('title')
    Hotel Add
@endsection

@section('body')
    <div class="row">
        <div class="col-xl-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-3">Hotel Add Form</h2>
                    <h5 class="text-center text-success mb-3">{{ session('message') }}</h5>

                    <form action="{{ route('manage.create') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label"> Name</label>
                            <input type="text" class="form-control" name="name"  placeholder="Enter hotel name" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ability</label>
                            <input type="number" class="form-control" name="ability"  placeholder="example: 50" />
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
@endsection
