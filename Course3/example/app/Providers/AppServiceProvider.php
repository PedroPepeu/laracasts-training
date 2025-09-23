<?php

namespace App\Providers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::preventLazyLoading(); // disables lazy loading, so it warns and throw errors when it happens

        // Gate::define('edit-job', function(User $user, Job $job) {
        //     return $job->employer->user->is(Auth::user());
        // });
    }
}
