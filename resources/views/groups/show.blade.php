@extends('layouts.old')

@section('content')
    <div class="container">
        <h1>Batch details</h1>

        <h3>Batch name: {{ $batch->name }}</h3>

        <ul>
            @forelse($batch->students as $student)
                <li>{{ $student->name }}</li>
            @empty
                <li>No students available in this batch</li>
            @endforelse
        </ul>

    </div>
@endsection