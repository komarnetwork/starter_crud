<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Paginator::useBootstrap();

        // gate dipakai untuk user yang sudah login, setelah login user bisa apa!
        Gate::define('admin', function (User $user) {
            // jika username komarudin
            // return $user->username === 'komarudin';

            // jika user table is_admin nilainya true
            return $user->is_admin;
        });
    }
}
