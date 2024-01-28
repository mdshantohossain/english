@extends('admin.master')

@section('title')
    Card Update
@endsection

@section('body')
    <!-- start row -->
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-3">Card status Update</h2>
                    <h4 class="text-center text-success">{{ session('message') }}</h4>

                    <form action="{{  $student->card_status == 1 ? route('card.update', ['id' => $student->id]) : route('complete.update', ['id' => $student->id]) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label"> Name</label>
                            <input type="text" class="form-control" value="{{ $student->name }}" readonly  placeholder="Student Name" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label"> Student ID.</label>
                            <input type="text" class="form-control" value="{{ $student->student_id }}" readonly  placeholder="Student Name" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Type</label>
                            <input type="email" class="form-control" value="{{ $student->student_type == 1 ? 'Residential' : 'Non Residential' }}" readonly  placeholder="Student Email" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label"> Batch</label>
                            <input type="text" class="form-control" value="{{ $student->batch_no }}" readonly  placeholder="Student Phone" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="card_status" class="form-select">
                                @if($student->card_status == 'Pending')
                                <option value="Pending" {{ $student->card_status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                <option value="Complete" {{ $student->card_status == 'Complete' ? 'selected' : '' }}>Complete</option>
                                @endif
                                @if($student->card_status == 'Complete')
                                <option value="Complete" {{ $student->card_status == 'Complete' ? 'Selected' : '' }}>Complete</option>
                                <option value="Received" {{ $student->card_status == 'Received' ? 'Selected' : '' }}>Received</option>
                                @endif
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
