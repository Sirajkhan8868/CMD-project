<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentClassController;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [StudentController::class, 'index'])->name('home');

Route::resource('admins', AdminController::class);
Route::resource('attendances', AttendanceController::class);
Route::resource('courses', CourseController::class);
Route::resource('departments', DepartmentController::class);
Route::resource('enrollments', EnrollmentController::class);
Route::resource('exams', ExamController::class);
Route::resource('fees', FeeController::class);
Route::resource('guardians', GuardianController::class);
Route::resource('libraries', LibraryController::class);
Route::resource('results', ResultController::class);
Route::resource('students', StudentController::class);
Route::resource('student-classes', StudentClassController::class);
Route::resource('teachers', TeacherController::class);
