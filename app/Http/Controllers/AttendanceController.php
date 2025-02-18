<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Student;
use App\Models\StudentClass;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::all();
        return view('attendances.index', compact('attendances'));
    }

    public function create()
    {
        $students = Student::all();
        $studentClasses = StudentClass::all();
        return view('attendances.create', compact('students', 'studentClasses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'student_class_id' => 'required|exists:student_classes,id',
            'status' => 'required|in:Present,Absent,Late',
            'date' => 'required|date',
        ]);

        Attendance::create($request->all());

        return redirect()->route('attendances.index');
    }

    public function show($id)
    {
        $attendance = Attendance::findOrFail($id);
        return view('attendances.show', compact('attendance'));
    }

    public function edit($id)
    {
        $attendance = Attendance::findOrFail($id);

        $students = Student::all();
        $studentClasses = StudentClass::all();

        return view('attendances.edit', compact('attendance', 'students', 'studentClasses'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'student_class_id' => 'required|exists:student_classes,id',
            'status' => 'required|in:Present,Absent,Late',
            'date' => 'required|date',
        ]);

        $attendance = Attendance::findOrFail($id);

        $attendance->update($request->all());

        return redirect()->route('attendances.index');
    }

    public function destroy($id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance->delete();

        return redirect()->route('attendances.index');
    }
}
