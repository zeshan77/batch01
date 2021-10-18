@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Students list</h1>
        <a href="/students/create" class="btn btn-outline-primary">Add student</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Roll No</th>
                    <th>Address</th>
                    <th>Created On</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->roll_no }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->created_at }}</td>
                        <td>
                            <a href="/students/{{ $student->id }}/edit">Edit</a>
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