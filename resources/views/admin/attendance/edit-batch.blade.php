@extends('admin.master')

@section('title')
    Batch Edit
@endsection

@section('body')
    <!-- start row -->
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-3"> Batch Edit</h2>

                    <form action="{{ route('batch.update', ['name' => $batch->batch_name]) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Batch Name</label>
                            <input type="text" class="form-control" value="{{ $batch->batch_name }}" readonly />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-select">
                                <option value="Pending" {{ $batch->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                <option value="Running" {{ $batch->status == 'Running' ? 'selected' : '' }}>Running</option>
                                <option value="Complete" {{ $batch->status == 'Complete' ? 'selected' : '' }}>Complete</option>
                            </select>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-outline-success"><strong>Update</strong></button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- end row -->
@endsection
