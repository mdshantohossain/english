@extends('admin.master')

@section('title')
    Student Update
@endsection

@section('body')
    <!-- start row -->
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-3">Student Update</h2>
                    <h4 class="text-center text-success">{{ session('message') }}</h4>

                    <form action="{{ route('student.update', ['id' => $student->id]) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label"> Student ID.</label>
                            <input type="text" class="form-control" value="{{ $student->student_id }}" readonly  placeholder="Student Name" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label"> Name</label>
                            <input type="text" class="form-control" value="{{ $student->name }}" readonly  placeholder="Student Name" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label"> Email</label>
                            <input type="email" class="form-control" value="{{ $student->email }}" readonly  placeholder="Student Email" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label"> Phone</label>
                            <input type="text" class="form-control" value="{{ $student->phone }}" readonly  placeholder="Student Phone" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-select">
                                <option value="Pending" {{ $student->status == 'Pending' ? 'Pending' : '' }}>Pending</option>
                                <option value="Clear" {{ $student->status == 'Clear' ? 'Clear' : '' }}>Clear</option>
                                <option value="Running" {{ $student->status == 'Running' ? 'Running' : '' }}>Running</option>
                                <option value="Complete" {{ $student->status == 'Complete' ? 'Complete' : '' }}>Complete</option>
                                <option value="Cancel" {{ $student->status == 'Cancel' ? 'Cancel' : '' }}>Cancel</option>
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
