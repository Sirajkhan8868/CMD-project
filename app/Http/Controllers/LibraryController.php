<?php


namespace App\Http\Controllers;

use App\Models\Library;
use App\Models\Student;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $libraries = Library::all();
        return view('libraries.index', compact('libraries'));
    }

    public function create()
    {
        $students = Student::all();
        return view('libraries.create', compact('students'));
    }

    public function store(Request $request)
    {
        Library::create($request->all());
        return redirect()->route('libraries.index');
    }

    public function show(Library $library)
    {
        return view('libraries.show', compact('library'));
    }

    public function edit(Library $library)
    {
        $students = Student::all();
        return view('libraries.edit', compact('library', 'students'));
    }

    public function update(Request $request, Library $library)
    {
        $library->update($request->all());
        return redirect()->route('libraries.index');
    }

    public function destroy(Library $library)
    {
        $library->delete();
        return redirect()->route('libraries.index');
    }
}

