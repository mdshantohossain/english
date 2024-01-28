@extends('admin.master')

@section('title')
    Question Edit
@endsection

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="question-card mt-5">
                    <div class="card-body">
                        <h4 class="text-center mb-3">Question create</h4>
                        <form action="{{ route('question.update', ['id' => $question->id]) }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="col-md-12">Question Title <span class="text-danger">*</span></label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{ $question->title }}" name="title" />
                                    <span class="text-danger">{{  $errors->has('title') ? $errors->first('title') : '' }}</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-md-12">Question Body</label>
                                <div class="col-md-12">
                                    <textarea name="body" class="form-control" rows="5" placeholder="If you have body of your question">{{ $question->body }}</textarea>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-md-12">Point <span class="text-danger">*</span></label>
                                <div class="col-md-12">
                                    <input type="number"  value="{{$question->point}}" class="form-control" name="point" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-md-12 mt-4">
                                    <h4>Exam name give it once</h4>
                                </label>
                            </div>
                            <div class="mb-3">
                                <label class="col-md-12">Exam Name</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="exam_name" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-12">
                                    <button class="btn btn-success ">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
