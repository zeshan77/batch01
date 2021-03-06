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
            ->with('profile')
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
        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'roll_no' => $request->roll_no,
            'address' => $request->address,
            'batch_id' => $request->batch_id,
        ]);

        $student
            ->profile()
            ->create([
                'gender' => $request->gender,
                'phone_number' => $request->phone_number,
                'blood_group' => $request->blood_group,
            ]);

        return redirect('/students');
    }

    public function edit(Student $student)
    {
        $student->load('batch');
        $student->load('profile');

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

        $student->profile()->delete();

        $student->profile()->create([
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'blood_group' => $request->blood_group,
        ]);

        return redirect('/students');
    }

    public function destroy(Student $student)
    {
        $student->profile()->delete();

        $student->delete();

        return redirect('/students');
    }
}
