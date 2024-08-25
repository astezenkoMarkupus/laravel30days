<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class RegisteredUserController extends Controller
{
    public function create(): View|Factory|Application
    {
        return view('auth.register');
    }

    public function store()
    {
        return 'azazaz';
    }
}
