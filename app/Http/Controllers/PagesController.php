<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact()
    {
        return view('pages.contact');
    }

    public function home()
    {
        return view('pages.home');
    }
}
