<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        return view('groups.index', [
            'groups' => Group::all(),
        ]);
    }

    public function create()
    {
        return view('groups.create');
    }

    public function store(Request $request)
    {
        Group::create([
            'name' => $request->name,
        ]);

        return redirect('/groups');
    }
}
