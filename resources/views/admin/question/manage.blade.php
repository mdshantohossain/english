@extends('admin.master')

@section('title')
    Question Manage
@endsection

@section('body')

    <div class="row">
        <div class="col-12 col-xl-12 mx-auto">
            <div class="card">
                <div class="card-body">

                    <h3 class="text-center mb-3">All Exam manage</h3>

                    <table class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                        <tr class="text-center">
                            <th>Sl.</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($exams as $exam)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $exam->exam_name}}</td>
                                <td>
                                    <label class="me-2">
                                        <input type="checkbox" name="status" {{ $exam->status == 1 ? 'checked': '' }} id="check" />add
                                    </label>
                                    <label>
                                        <input type="checkbox" name="status" {{ $exam->status == 0 ? 'checked': '' }} id="uncheck" />deactivated
                                    </label>
                                </td>
                                <td>
                                    <a href="{{ route('exam.delete', ['id' => $exam->id]) }}" class="btn btn-outline-danger btn-sm">
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

    <div class="row">
        <div class="col-12 col-xl-12 mx-auto">
            <div class="card">
                <div class="card-body">

                    <h3 class="text-center mb-3">All question manage</h3>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                        <tr class="text-center">
                            <th>Sl.</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Point</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($questions as $question)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ substr($question->title, 0, 36). '...' }}</td>
                                <td>{{ substr($question->body, 0, 50). '...' }}</td>
                                <td>{{ $question->point}}</td>
                                <td>
                                    <label class="me-2">
                                        <input type="checkbox" name="status" {{ $question->status == 1 ? 'checked': '' }} id="publish" />add
                                    </label>
                                    <label>
                                        <input type="checkbox" name="status" {{ $question->status == 0 ? 'checked': '' }} id="unpublished" />deactivated
                                    </label>
                                </td>
                                <td>
                                    <a href="{{ route('question.edit', ['id' => $question->id]) }}" class="btn btn-outline-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ route('question.delete', ['id' => $question->id]) }}" class="btn btn-outline-danger btn-sm">
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

