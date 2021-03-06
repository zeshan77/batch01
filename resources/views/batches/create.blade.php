@extends('layouts.old')

@section('content')
    <div class="container">
        <h1>Add new batch</h1>

        <form action="/batches" method="post">
            @csrf
            @method('post')
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{ old('name') }}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection