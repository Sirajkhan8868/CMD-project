<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    public function create()
    {
        $teachers = Teacher::all();
        return view('course.create', compact('teachers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'course_code' => 'required',
            'teacher_id' => 'required|exists:teachers,id',
            'description' => 'nullable',
            'credits' => 'required|integer|min:1',
        ]);

        Course::create([
            'course_name' => $request->course_name,
            'course_code' => $request->course_code,
            'teacher_id' => $request->teacher_id,
            'description' => $request->description,
            'credits' => $request->credits,
        ]);

        return redirect()->route('courses.index')->with('success', 'Course created successfully!');
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('course.show', compact('course'));
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $teachers = Teacher::all();
        return view('course.edit', compact('course', 'teachers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'course_name' => 'required',
            'course_code' => 'required',
            'teacher_id' => 'required|exists:teachers,id',
            'description' => 'nullable',
            'credits' => 'required|integer|min:1',
        ]);

        $course = Course::findOrFail($id);
        $course->update([
            'course_name' => $request->course_name,
            'course_code' => $request->course_code,
            'teacher_id' => $request->teacher_id,
            'description' => $request->description ?? 'No description provided',
            'credits' => $request->credits,
        ]);

        return redirect()->route('courses.index')->with('success', 'Course updated successfully!');
    }

    public function destroy($id)
    {
        Course::destroy($id);
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully!');
    }
}
