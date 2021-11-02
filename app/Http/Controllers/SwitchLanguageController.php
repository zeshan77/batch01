<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwitchLanguageController extends Controller
{
    public function switch($locale)
    {
        session()->put('locale', $locale);

        return redirect()->back();
    }
}
