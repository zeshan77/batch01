<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use App\Policies\AccountPolicy;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Account::class);

        return view('accounts.index');
    }
}
