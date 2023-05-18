<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;
use App\Models\Team;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
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

        /* define a admin user role */
        Gate::define('isPM', function($user) {

            return $user->role == 'Project Manager';
 
         });

         Gate::define('viewTeamTasks', function (User $user, Team $team) {
            if ($user->role === 'Project Manager') {
                return true; // Allow project managers to view team tasks
            }
            
            // Check if the user is a team member of the specified team
            return $user->teams->contains($team);
        });

    }
}
