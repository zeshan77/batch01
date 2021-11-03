@extends('layouts.old')

@section('content')
    <div class="container">
        <h1>Modify student</h1>

        <form action="/students/{{ $student->id }}" method="post">
            @csrf
            @method('put')

            <div class="row">
                <div class="col-lg-6">
                    <h3>Basic information</h3>
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
                </div>
                <div class="col-lg-6">
                    <h3>Profile information</h3>

                    <div class="form-group">
                        <label for="">Gender</label>
                        <select name="gender" id="" class="form-control">
                            <option value="male" {{ optional($student->profile)->gender === 'male' ? 'selected': '' }}>Male</option>
                            <option value="female" {{ optional($student->profile)->gender === 'female' ? 'selected': '' }}>Female</option>
                        </select>
                        @error('gender')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Phone number</label>
                        <input type="text" name="phone_number" id="" class="form-control" value="{{ optional($student->profile)->phone_number }}" />
                        @error('phone_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Blood group</label>
                        <select name="blood_group" id="" class="form-control">
                            <option value="A-" {{ optional($student->profile)->blood_group === 'A-' ? 'selected': '' }}>A-</option>
                            <option value="A+" {{ optional($student->profile)->blood_group === 'A+' ? 'selected': '' }}>A+</option>
                            <option value="B-" {{ optional($student->profile)->blood_group === 'B-' ? 'selected': '' }}>B-</option>
                            <option value="B+" {{ optional($student->profile)->blood_group === 'B+' ? 'selected': '' }}>B+</option>
                            <option value="O-" {{ optional($student->profile)->blood_group === 'O-' ? 'selected': '' }}>O-</option>
                            <option value="O+" {{ optional($student->profile)->blood_group === 'O+' ? 'selected': '' }}>O+</option>
                            <option value="AB-" {{ optional($student->profile)->blood_group === 'AB-' ? 'selected': '' }}>AB-</option>
                            <option value="AB+" {{ optional($student->profile)->blood_group === 'AB+' ? 'selected': '' }}>AB+</option>
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