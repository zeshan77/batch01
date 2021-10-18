@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add new student</h1>

        <form action="/students" method="post">
            @csrf
            @method('post')
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email">
            </div>

            <div class="form-group">
                <label>Age</label>
                <input type="number" class="form-control" placeholder="Enter age" name="age">
            </div>

            <div class="form-group">
                <label>Roll No</label>
                <input type="text" class="form-control" placeholder="Enter roll no" name="roll_no">
            </div>

            <div class="form-group">
                <label>Address</label>
                <textarea class="form-control" name="address" cols="30" rows="10" placeholder="Type your address"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection