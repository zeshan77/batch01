@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit batch</h1>

        <form action="/batches/{{ $batch->id }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{ old('name', $batch->name) }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>
@endsection