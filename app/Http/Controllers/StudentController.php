<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::where('age', '>=', 25)
            ->orderBy('age', 'desc')
            ->get();

        return view('students.index', [
            'students' => $students,
        ]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
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

    public function edit($studentID)
    {
        $student = Student::find($studentID);

        return view('students.edit', [
            'student' => $student,
        ]);
    }

    public function update($studentID, Request $request)
    {
        Student::where('id', $studentID)->update([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'roll_no' => $request->roll_no,
            'address' => $request->address,
        ]);

        return redirect('/students');
    }
}
