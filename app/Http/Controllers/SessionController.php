<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create(): View|Factory|Application
    {
        return view('auth.login');
    }

    public function store(): Application|Redirector|RedirectResponse
    {
        $validatedAttributes = request()->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($validatedAttributes)) {
            request()->session()->regenerate();

            return redirect('/jobs');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function destroy(): Application|Redirector|RedirectResponse
    {
        Auth::logout();

        return redirect('/jobs');
    }
}
