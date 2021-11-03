@extends('layouts.old')

@section('content')
    <div class="container">
        <h1>Add new student</h1>

{{--        @if($errors->any())--}}
{{--            <div class="alert alert-danger">--}}
{{--                <ul>--}}
{{--                    @foreach($errors->all() as $error)--}}
{{--                        <li>{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}

        <form action="/students" method="post">
            @csrf
            @method('post')

            <div class="row" style="display: flex">
                <div class="col-lg-6">
                    <h3>Basic information</h3>

                    <div class="form-group">
                        <label>Batch</label>
                        <select name="batch_id" class="form-control">
                            <option value="">Choose batch</option>
                            @foreach($batches as $batch)
                                <option value="{{ $batch->id }}">{{ $batch->name }}</option>
                            @endforeach
                        </select>

                        @error('batch_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Age</label>
                        <input type="number" class="form-control" placeholder="Enter age" name="age" value="{{ old('age') }}">
                        @error('age')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Roll No</label>
                        <input type="text" class="form-control" placeholder="Enter roll no" name="roll_no" value="{{ old('roll_no') }}">
                        @error('roll_no')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" name="address" cols="30" rows="10" placeholder="Type your address">
                            {{ old('address') }}
                        </textarea>
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-lg-6">
                    <h3>Profile</h3>

                    <div class="form-group">
                        <label for="">Gender</label>
                        <select name="gender" id="" class="form-control">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        @error('gender')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Phone number</label>
                        <input type="text" name="phone_number" id="" class="form-control" />
                        @error('phone_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Blood group</label>
                        <select name="blood_group" id="" class="form-control">
                            <option value="A-">A-</option>
                            <option value="A+">A+</option>
                            <option value="B-">B-</option>
                            <option value="B+">B+</option>
                            <option value="O-">O-</option>
                            <option value="O+">O+</option>
                            <option value="AB-">AB-</option>
                            <option value="AB+">AB+</option>
                        </select>
                        @error('blood_group')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
            </div>
        </form>

    </div>
@endsection