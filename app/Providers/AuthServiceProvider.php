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


         Gate::before(function (User $user){
         if($user->hasRole("directeur")){
             
             return true;
         }

          Gate::define("secretaire", function(User $user){
            return $user->hasRole("secretaire");

            //le fonction callback qui prend en parametre le user verifie si l,utilisateur

            //qui sest authentifier a le role admin 
        });
         

         });




        //
    }
}
