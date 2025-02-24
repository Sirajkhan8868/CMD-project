<?php

namespace App\Http\Controllers;

use App\Models\StudentClass;
use App\Models\Teacher;
use Illuminate\Http\Request;

class StudentClassController extends Controller
{
    public function index()
    {
        $studentClasses = StudentClass::with('teacher')->get();
        return view('student_classes.index', compact('studentClasses'));
    }

    public function create()
    {
        $teachers = Teacher::all();
        return view('student_classes.create', compact('teachers'));
    }

    public function store(Request $request)
    {
        StudentClass::create($request->all());
        return redirect()->route('student_classes.index');
    }

    public function show(StudentClass $studentClass)
    {
        return view('student_classes.show', compact('studentClass'));
    }

    public function edit(StudentClass $studentClass)
    {
        $teachers = Teacher::all();
        return view('student_classes.edit', compact('studentClass', 'teachers'));
    }

    public function update(Request $request, StudentClass $studentClass)
    {
        $studentClass->update($request->all());
        return redirect()->route('student_classes.index');
    }

    public function destroy(StudentClass $studentClass)
    {
        $studentClass->delete();
        return redirect()->route('student_classes.index');
    }
}
