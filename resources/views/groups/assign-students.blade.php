@extends('layouts.old')

@section('content')
    <div class="container">
        <h1>Assign students to group <strong>{{ $group->name }}</strong></h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/groups/{{ $group->id }}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for=""></label>
                <select name="students[]" id="" class="form-control" multiple>
                    <option value="">Choose multiple students</option>
                    @foreach($students as $student)
                        <option value="{{ $student->id }}" {{ in_array($student->id, $selectedStudents) ? 'selected' : '' }}>{{ $student->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection