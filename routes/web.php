<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\ManageController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/admission', [StudentController::class, 'index'])->name('student.add');
    Route::post('/admission', [StudentController::class, 'create'])->name('student.create');
    Route::get('/form/print/{id}', [StudentController::class, 'formPrint'])->name('form.print');
    Route::get('/student/manage', [StudentController::class, 'manage'])->name('student.manage');
    Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
    Route::get('/student/detail/{id}', [StudentController::class, 'detail'])->name('student.detail');
    Route::get('/student/delete/{id}', [StudentController::class, 'delete'])->name('student.delete');
    Route::post('/student/update/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::get('/student/release', [StudentController::class, 'release'])->name('student.release');
    Route::get('/student/clear', [StudentController::class, 'clear'])->name('student.clear');
    Route::get('/student/complete', [StudentController::class, 'complete'])->name('student.complete');

    Route::get('/batch/list', [AttendanceController::class, 'index'])->name('batch.list');
    Route::get('/attendance/sheet/{name}', [AttendanceController::class, 'attendance'])->name('attendance.sheet');
    Route::get('/batch/manage', [AttendanceController::class, 'manage'])->name('batch.manage');
    Route::post('/attendance/create/{batch_name}', [AttendanceController::class, 'create'])->name('attendance.create');
    Route::get('/batch/edit/{name}', [AttendanceController::class, 'edit'])->name('batch.edit');
    Route::post('/batch/update/{name}', [AttendanceController::class, 'update'])->name('batch.update');
    Route::get('/all/batch', [AttendanceController::class, 'allBatch'])->name('all.batch');
    Route::get('/batch/detail', [AttendanceController::class, 'batchDetail'])->name('batch.detail');

    // QUESTION MODULE

    Route::get('/question/add', [QuestionController::class, 'index'])->name('question.add');
    Route::post('/question/create', [QuestionController::class, 'create'])->name('question.create');
    Route::get('/question/manage', [QuestionController::class, 'manage'])->name('question.manage');
    Route::get('/question/edit/{id}', [QuestionController::class, 'edit'])->name('question.edit');
    Route::post('/question/update/{id}', [QuestionController::class, 'update'])->name('question.update');
    Route::get('/question/delete/{id}', [QuestionController::class, 'delete'])->name('question.delete');



    Route::get('/teacher/add', [TeacherController::class, 'index'])->name('teacher.add');
    Route::post('/teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
    Route::get('/teacher/manage', [TeacherController::class, 'manage'])->name('teacher.manage');
    Route::get('/teacher/delete/{id}', [TeacherController::class, 'delete'])->name('teacher.delete');

    Route::get('/card/manage', [CardController::class, 'index'])->name('card.manage');
    Route::get('/card/detail/{id}', [CardController::class, 'detail'])->name('card.detail');
    Route::get('/card/edit/{id}', [CardController::class, 'edit'])->name('card.edit');
    Route::post('/card/update/{id}', [CardController::class, 'update'])->name('card.update');
    Route::get('/card/complete', [CardController::class, 'complete'])->name('card.complete');
    Route::get('/card/received', [CardController::class, 'received'])->name('card.received');
    Route::post('/complete/update/{id}', [CardController::class, 'completeUpdate'])->name('complete.update');

    Route::get('/manage/add', [ManageController::class, 'index'])->name('manage.add');
    Route::post('/manage/create', [ManageController::class, 'create'])->name('manage.create');
    Route::get('/manage/manage', [ManageController::class, 'manage'])->name('manage.manage');
    Route::get('/manage/edit/{id}', [ManageController::class, 'edit'])->name('manage.edit');
    Route::post('/manage/update/{id}', [ManageController::class, 'update'])->name('manage.update');
    Route::get('/manage/delete/{id}', [ManageController::class, 'delete'])->name('manage.delete');
});
