<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('admin-access', function($user)
        {
            if($user->role == 'admin')
            {
                return true;
            }
            return false;
        });
        
        $gate->define('operator-access', function($user)
        {
            if($user->role == 'operator')
            {
                return true;
            }
            return false;
        });
        
        $gate->define('gurukelas-access', function($user)
        {
            if($user->role == 'gurukelas')
            {
                return true;
            }
            return false;
        });
        $gate->define('gurumapel-access', function($user)
        {
            if($user->role == 'gurumapel')
            {
                return true;
            }
            return false;
        });
        $gate->define('kepalasekolah-access', function($user)
        {
            if($user->role == 'kepalasekolah')
            {
                return true;
            }
            return false;
        });
    }
}
