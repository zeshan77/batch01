<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBatchRequest;
use App\Http\Requests\CreateStudentRequest;
use App\Models\Batch;
use App\Models\Student;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    public function index()
    {
        return view('batches.index', [
            'batches' => Batch::with('students')->get(),
        ]);
    }

    public function show(Batch $batch)
    {
        $batch->load('students');

        return view('batches.show', [
            'batch' => $batch,
        ]);
    }

    public function create()
    {
        return view('batches.create');
    }

    public function store(CreateBatchRequest $request)
    {
        Batch::create([
            'name' => $request->name,
        ]);

        return redirect('/batches');
    }

    public function edit(Batch $batch)
    {
        return view('batches.edit', [
            'batch' => $batch,
        ]);
    }

    public function update(Batch $batch, CreateBatchRequest $request)
    {
        Batch::where('id', $batch->id)->update([
            'name' => $request->name,
        ]);

        return redirect('/batches');
    }
}
