@extends('admin.master')

@section('title')
    Admission
@endsection

@section('body')
    <div class="row">
        <div class="col-xl-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-4">Admission Form</h2>

                    <form action="{{ route('student.create') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="name"  placeholder="Enter Your Full Name" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email"  placeholder="Enter Your Email" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone"  placeholder="Enter Your Phone" />
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Father's Name</label>
                                    <input type="text" class="form-control" name="father_name"  placeholder="Enter Your Father's Name" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Mother's Name</label>
                                    <input type="text" class="form-control mb-3" name="mother_name"  placeholder="Enter Your Mother's Name" />
                                </div>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Present Address</label>
                            <textarea name="present_address" class="form-control" rows="3"  placeholder="Enter Your Present Address"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Permanent Address</label>
                            <textarea name="permanent_address" rows="3" class="form-control"   placeholder="Enter Your Permanent Address"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" name="dob"  placeholder="Enter Your Date of Birth" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NID <span class="text-sm">(optional)</span></label>
                            <input type="text" class="form-control" name="nid"  placeholder="Enter Your National ID Card" />
                        </div>
                        <div class="mb-3">
                            <label class="col-md-3 form-label">Student Type</label>
                            <div class="col-md-9">
                                <label class="me-5"><input type="radio" name="blood_group" value="A+" checked />A+</label>
                                <label class="me-5"><input type="radio" name="blood_group" value="A-" />A-</label>
                                <label class="me-5"><input type="radio" name="blood_group" value="B+" />B+</label>
                                <label class="me-5"><input type="radio" name="blood_group" value="B-" />B-</label>
                                <label class="me-5"><input type="radio" name="blood_group" value="Ab+" />Ab+</label>
                                <label class="me-5"><input type="radio" name="blood_group" value="Ab-" />Ab-</label>
                                <label class="me-5"><input type="radio" name="blood_group" value="O+" />O+</label>
                                <label class="me-5"><input type="radio" name="blood_group" value="O-" />O-</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="col-md-3 form-label">Gender</label>
                            <div class="col-md-9">
                                <label class="me-5"><input type="radio" name="gender" value="Male" checked />Male</label>
                                <label class="me-5"><input type="radio" name="gender" value="Female" />Female</label>
                                <label class="me-5"><input type="radio" name="gender" value="Other" />Other</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="col-md-3 form-label">Student Type</label>
                            <div class="col-md-9">
                                <label class="me-5"><input type="radio" name="student_type" value="Residential" checked />Residential</label>
                                <label class="me-5"><input type="radio" name="student_type" value="Non-Residential" />Non-Residential</label>
                            </div>
                        </div>


                        <div>
                            <h3 class="text-center">Payment </h3>
                            <hr>
                        </div>
                        <div class="mb-3">
                            <label class="col-md-3 form-label">Payment Method</label>
                            <div class="col-md-9">
                                <label class="me-5"><input type="radio" name="payment_method" value="1" checked />Cash On</label>
                                <label class="me-5"><input type="radio" name="payment_method" value="2" />Check</label>
                                <label class="me-5"><input type="radio" data-bs-target="#payment" data-bs-toggle="collapse" name="payment_method" />Online</label>

                                <div class="collapse" id="payment">
                                    <label class="me-5"><input type="radio" name="payment_method" value="3" />Bikash</label>
                                    <label class="me-5"><input type="radio" name="payment_method" value="4" />Nagad</label>
                                    <label class="me-5"><input type="radio" name="payment_method" value="5" />Rocket</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Payment Amount</label>
                            <input type="text" class="form-control" name="payment_amount" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Due Amount</label>
                            <input type="text" class="form-control" name="due_amount"  placeholder="Enter Your Due Amount" />
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
