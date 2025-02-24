<?php


namespace App\Http\Controllers;

use App\Models\Fee;
use App\Models\Student;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    public function index()
    {
        $fees = Fee::with('student')->get();
        return view('fees.index', compact('fees'));
    }

    public function create()
    {
        $students = Student::all();
        return view('fees.create', compact('students'));
    }

    public function store(Request $request)
    {
        Fee::create($request->all());
        return redirect()->route('fees.index');
    }

    public function show(Fee $fee)
    {
        return view('fees.show', compact('fee'));
    }

    public function edit(Fee $fee)
    {
        $students = Student::all();
        return view('fees.edit', compact('fee', 'students'));
    }

    public function update(Request $request, Fee $fee)
    {
        $fee->update($request->all());
        return redirect()->route('fees.index');
    }

    public function destroy(Fee $fee)
    {
        $fee->delete();
        return redirect()->route('fees.index');
    }
}


