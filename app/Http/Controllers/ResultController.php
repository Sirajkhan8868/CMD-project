<?php


namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Student;
use App\Models\Exam;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        $results = Result::all();
        return view('results.index', compact('results'));
    }

    public function create()
    {
        $students = Student::all();
        $exams = Exam::all();
        return view('results.create', compact('students', 'exams'));
    }

    public function store(Request $request)
    {
        Result::create($request->all());
        return redirect()->route('results.index');
    }

    public function show(Result $result)
    {
        return view('results.show', compact('result'));
    }

    public function edit(Result $result)
    {
        $students = Student::all();
        $exams = Exam::all();
        return view('results.edit', compact('result', 'students', 'exams'));
    }

    public function update(Request $request, Result $result)
    {
        $result->update($request->all());
        return redirect()->route('results.index');
    }

    public function destroy(Result $result)
    {
        $result->delete();
        return redirect()->route('results.index');
    }
}

