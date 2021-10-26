@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Batches list</h1>
        <a href="/batches/create" class="btn btn-outline-primary">Add batch</a>
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
                @forelse($batches as $batch)
                    <tr>
                        <td>{{ $batch->id }}</td>
                        <td>{{ $batch->name }}</td>
                        <td>{{ $batch->students->count() }}</td>
                        <td>{{ $batch->created_at }}</td>
                        <td>
                            <a href="/batches/{{ $batch->id }}/edit">Edit</a> -
                            <a href="/batches/{{ $batch->id }}/show">Show</a>
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