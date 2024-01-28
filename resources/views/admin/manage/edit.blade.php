@extends('admin.master')

@section('title')
    Hotel Edit
@endsection

@section('body')
    <div class="row">
        <div class="col-xl-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-3">Hotel Edit Form</h2>
                    <h5 class="text-center text-center mb-5">{{ session('message') }}</h5>

                    <form action="{{ route('manage.update', ['id' => $manage->id]) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label"> Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $manage->name }}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ability</label>
                            <input type="number" class="form-control" name="ability" value="{{ $manage->ability }}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Residential Fee</label>
                            <input type="number" class="form-control" name="residential_fee" value="{{ $manage->residential_fee }}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ability</label>
                            <input type="number" class="form-control" name="non_residential_fee" {{ $manage->non_residential_fee }} />
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
