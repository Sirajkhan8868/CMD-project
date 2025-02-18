<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Guardian;
use App\Models\StudentClass;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $guardians = Guardian::all();
        $studentClasses = StudentClass::all();
        return view('students.create', compact('guardians', 'studentClasses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required|date',
            'gender' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'email' => 'required|email',
            'guardian_id' => 'required|exists:guardians,id',
            'student_class_id' => 'required|exists:student_classes,id',
            'enrollment_date' => 'required|date',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index');
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $guardians = Guardian::all();
        $studentClasses = StudentClass::all();
        return view('students.edit', compact('student', 'guardians', 'studentClasses'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required|date',
            'gender' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'email' => 'required|email',
            'guardian_id' => 'required|exists:guardians,id',
            'student_class_id' => 'required|exists:student_classes,id',
            'enrollment_date' => 'required|date',
        ]);

        $student = Student::findOrFail($id);
        $student->update($request->all());

        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index');
    }
}
