<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('customers.update', function ($user) {
            return ($user->role == 'admins' or $user->role == 'users');
        });

        Gate::define('customers.trash', function ($user) {
            return ($user->role == 'admins');
        });

        $this->registerPolicies();
    }
}
