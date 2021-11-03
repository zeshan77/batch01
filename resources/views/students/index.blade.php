@extends('layouts.old')

@section('content')
    <div class="container">
        <h1>Students list</h1>
        <a href="/students/create" class="btn btn-outline-primary">Add student</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Batch</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Phone</th>
                    <th>Blood group</th>
                    <th>Roll No</th>
                    <th>Created On</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ optional($student->batch)->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ optional($student->profile)->phone_number }}</td>
                        <td>{{ optional($student->profile)->blood_group }}</td>
                        <td>{{ $student->roll_no }}</td>
                        <td>{{ $student->created_at }}</td>
                        <td>
                            <a href="/students/{{ $student->id }}/edit">Edit</a> -
                            <a href="/students/{{ $student->id }}/delete">Delete</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No records found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection