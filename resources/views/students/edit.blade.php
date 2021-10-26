@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add new student</h1>

        <form action="/students/{{ $student->id }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label>Associated batch</label>
                <select class="form-control" name="batch_id">
                    <option value="">Choose batch</option>
                    @foreach($batches as $batch)
                        <option value="{{ $batch->id }}" {{ optional($student->batch)->id == $batch->id ? 'selected' : '' }}>{{ $batch->name }}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{ $student->name }}">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{ $student->email }}">
            </div>

            <div class="form-group">
                <label>Age</label>
                <input type="number" class="form-control" placeholder="Enter age" name="age" value="{{ $student->age }}">
            </div>

            <div class="form-group">
                <label>Roll No</label>
                <input type="text" class="form-control" placeholder="Enter roll no" name="roll_no" value="{{ $student->roll_no }}">
            </div>

            <div class="form-group">
                <label>Address</label>
                <textarea class="form-control" name="address" cols="30" rows="10" placeholder="Type your address">{{ $student->address }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>
@endsection