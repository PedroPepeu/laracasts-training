<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index() 
    {
        // $jobs = Job::with('employer')->get(); // this makes that insead of running many queries, run only one asking for all the data, this is faster (EAGER LOADING) see the @AppServiceProvider file
        // $jobs = Job::all(); // lazy loading
        // $jobs = Job::with('employer')->paginate(3); // limit the number to 3 (if run in the end of the href ?page=2 , it will show more 3 (if have))
        $jobs = Job::with('employer')->latest()->simplePaginate(3);
        // $jobs = Job::with('employer')->cursorPaginate(3); // It would not appear in the link the page=x, it will show cursor={some hash like}
        // This will be choosen when I do not want the user to know the page it is

        return view('jobs.index', [
            'jobs' => $jobs,
        ]);
    }

    public function create() 
    {
        return view('jobs.create');
    }

    public function show() 
    {
        return view('jobs.show', ['job' => $job]); 
    }

    public function store() 
    {
        // request()->all();
        // validate...
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]);

        return redirect('/jobs');
    }

    public function edit() 
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update() 
    {
        // validate
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        // authorize (on hold)
        // update the job
        // $job = Job::find($id); // it could be null
        // $job = Job::findOrFail($id);

        // $job->title = request('title');
        // $job->salary = request('salary');
        // $job->save();

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        // redirect to the job page
        return redirect('/jobs/' . $job->id);
    }

    public function destroy() 
    {
        // authorize (on hold)
        // delete the job
        // Job::findOrFail($id)->delete();
        $job->delete();

        // redirect
        return redirect('/jobs');
    }
}
