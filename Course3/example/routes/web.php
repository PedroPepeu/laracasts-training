<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    // $jobs = Job::with('employer')->get(); // this makes that insead of running many queries, run only one asking for all the data, this is faster (EAGER LOADING) see the @AppServiceProvider file
    // $jobs = Job::all(); // lazy loading
    $jobs = Job::with('employer')->paginate(3); // limit the number to 3 (if run in the end of the href ?page=2 , it will show more 3 (if have))

    return view('jobs', [
        'jobs' => $jobs,
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]); 
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/foo', function () {
//     return ['foo' => 'bar'];
// });