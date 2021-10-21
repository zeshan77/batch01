<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('age', 'desc')
            ->get();

        return view('students.index', [
            'students' => $students,
        ]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(CreateStudentRequest $request)
    {
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'roll_no' => $request->roll_no,
            'address' => $request->address,
        ]);

        return redirect('/students');
    }

    public function edit(Student $student)
    {
        return view('students.edit', [
            'student' => $student,
        ]);
    }

    public function update(Student $student, CreateStudentRequest $request)
    {
        Student::where('id', $student->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'roll_no' => $request->roll_no,
            'address' => $request->address,
        ]);

        return redirect('/students');
    }
}
