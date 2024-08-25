<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class SessionController extends Controller
{
    public function create(): View|Factory|Application
    {
        return view('auth.login');
    }

    public function store()
    {
        return 'azaza';
    }
}
