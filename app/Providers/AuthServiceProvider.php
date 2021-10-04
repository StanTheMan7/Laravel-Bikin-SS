<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('about-edit', function(User $user){
            return in_array($user->role_id, [1,2]);
        });
        Gate::define('about2-edit', function(User $user){
            return in_array($user->role_id, [1,2]);
       });


        Gate::define('user-block', function(User $user){
            return in_array($user->role_id, [1]);
       });

       Gate::define('tes-del', function(User $user){
            return in_array($user->role_id, [1,3]);
        });
        
    }
}
