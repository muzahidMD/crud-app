<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class studentController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('created_at', 'desc')->paginate(10);
        return view('students.index', compact('students'));
    }
    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|digits:11|unique:students,phone'
        ]);
        // dd('ok');

        Student::create($request->all());
        return redirect()->route('student.index')->with('success', 'Student Added Successfully');
    }

    // Show student
    public function show(Student $student)
    {
        // $student = Student::findOrFail($id);
        // dd($student);
        return view('students.show', compact('student'));
        // return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('students', 'email')->ignore($student->id)
            ],
            'phone' => [
                'required',
                'digits:11',
                Rule::unique('students', 'phone')->ignore($student->id)
            ]
        ]);
        dd('ok');
    }
}
