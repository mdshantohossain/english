@extends('admin.master')

@section('title')
    Question Add
@endsection

@section('body')


    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="question-card mt-5">
                    <div class="card-body">
                        <h4 class="text-center mb-3">Question create</h4>
                        <form action="{{ route('question.create') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="col-md-12 question_title">Exam Name</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="exam_name" placeholder="Exam name" />
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="col-md-12 question_title">Examiner Name</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="examiner_name" placeholder="Examiner name" />
                                </div>
                            </div>
                            <div id="body">

                            </div>

                            <div class="mb-5">
                                <div class="col-md-12">
                                    <span onclick="makeQuestion()" class="btn btn-primary f-left">Add question</span>
                                    <button type="submit" class="btn btn-success f-right">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{asset('/')}}admin/assets/js/question.js">


    </script>
@endsection
