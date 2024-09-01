<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    public function index(): View|Factory|Application
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);

        return view('jobs/index', ['jobs' => $jobs]);
    }

    public function create(): View|Factory|Application
    {
        return view('jobs/create');
    }

    public function show(Job $job): View|Factory|Application
    {
        return view('jobs/show', [
            'job'      => $job,
            'isAuthor' => Auth::check() && $job->employer->user->isNot(Auth::user()),
        ]);
    }

    public function store(Request $request): Application|Redirector|RedirectResponse
    {
        $request->validate([
            'title'  => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        Job::create([
            'title'       => request('title'),
            'salary'      => request('salary'),
            'employer_id' => 1,
        ]);

        return redirect('/jobs');
    }

    public function edit(Job $job): Factory|View|Application|Redirector|RedirectResponse
    {
        return view('jobs/edit', ['job' => $job]);
    }

    public function update(Request $request, Job $job): Application|Redirector|RedirectResponse
    {
        // Authorize...

        $request->validate([
            'title'  => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        $job->update(['title' => request('title'), 'salary' => request('salary')]);

        return redirect("/jobs/$job->id");
    }

    public function destroy(Job $job): Application|Redirector|RedirectResponse
    {
        // Authorize...

        $job->delete();

        return redirect('/jobs');
    }
}
