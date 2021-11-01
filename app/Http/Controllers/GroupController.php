<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        return view('groups.index', [
            'groups' => Group::with('students')->get(),
        ]);
    }

    public function create()
    {
        return view('groups.create');
    }

    public function store(Request $request)
    {
        Group::create([
            'name' => $request->name,
        ]);

        return redirect('/groups');
    }

    public function assignStudents(Group $group)
    {
        $selectedStudents = [];

        foreach($group->students as $student) {
            $selectedStudents[] = $student->pivot->student_id;
        }

        return view('groups.assign-students', [
            'group' => $group,
            'students' => Student::all(),
            'selectedStudents' => $selectedStudents,
        ]);
    }

    public function storeAssignStudents(Group $group, Request $request)
    {
        $this->validate($request, [
            'students' => 'array|required',
            'students.*' => 'exists:students,id',
        ]);

        $group->students()->sync($request->get('students'));

        return redirect('/groups')
            ->with('status', "Students successfully assigned to group $group->name");
    }
}
