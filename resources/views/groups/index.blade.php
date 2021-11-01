@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Groups list</h1>
        <a href="/groups/create" class="btn btn-outline-primary">Add new group</a>

        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>No of students</th>
                    <th>Created On</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($groups as $group)
                    <tr>
                        <td>{{ $group->id }}</td>
                        <td>{{ $group->name }}</td>
                        <td>{{ $group->students->count() }}</td>
                        <td>{{ $group->created_at }}</td>
                        <td>
                            <a href="/groups/{{ $group->id }}/edit">Edit</a> -
                            <a href="/groups/{{ $group->id }}/assign-students">Assign students</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No records found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection