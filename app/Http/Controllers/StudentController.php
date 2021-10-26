<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentRequest;
use App\Models\Batch;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('batch')
            ->orderBy('age', 'desc')
            ->get();

        return view('students.index', [
            'students' => $students,
        ]);
    }

    public function create()
    {
        return view('students.create', [
            'batches' => Batch::all(),
        ]);
    }

    public function store(CreateStudentRequest $request)
    {
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'roll_no' => $request->roll_no,
            'address' => $request->address,
            'batch_id' => $request->batch_id,
        ]);

        return redirect('/students');
    }

    public function edit(Student $student)
    {
        $student->load('batch');

        return view('students.edit', [
            'student' => $student,
            'batches' => Batch::all(),
        ]);
    }

    public function update(Student $student, CreateStudentRequest $request)
    {
        Student::where('id', $student->id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'age' => $request->age,
                'roll_no' => $request->roll_no,
                'address' => $request->address,
                'batch_id' => $request->batch_id,
        ]);

        return redirect('/students');
    }
}
