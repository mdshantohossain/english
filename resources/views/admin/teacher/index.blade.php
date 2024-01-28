@extends('admin.master')

@section('title')
    Teacher add
@endsection

@section('body')
    <div class="row">
        <div class="col-xl-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Teacher Add form</h4>
                    <h5 class="text-center text-success mb-4">{{ session('message') }}</h5>
                    <form action="{{ route('teacher.create') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label"> Full Name</label>
                            <input type="text" class="form-control" name="name"  placeholder="Enter Full Name" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email"  placeholder="Enter teacher's email" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone"  placeholder="Enter  teacher's phone" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control" name="subject"  placeholder="Enter teacher's subject" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Position</label>
                            <input type="text" class="form-control" name="position"  placeholder="Enter teacher's position" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Age</label>
                            <input type="text" class="form-control" name="age"  placeholder="Enter teacher's age" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Start Date</label>
                            <input type="date" class="form-control" name="start_date"  placeholder="Enter teacher's age" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Salary</label>
                            <input type="text" class="form-control" name="salary"  placeholder="Enter teacher's age" />
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
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
