<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        // Image::class => PolicyForImage::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::define('update-image',[PolicyForImage::class,'update']);

        // Gate::define('delete-image',[PolicyForImage::class,'delete']);

         Gate::before(function($user, $ability){
           if($user->role === Role::Admin){
             return true;
           }
         });
    }
}
