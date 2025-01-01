<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
=======
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
<<<<<<< HEAD
     */
    public function register(): void
=======
     *
     * @return void
     */
    public function register()
>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a
    {
        //
    }

    /**
     * Bootstrap any application services.
<<<<<<< HEAD
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }
}
=======
     *
     * @return void
     */
    public function boot()
    {
        carbon::setLocale('id'); // Set locale ke bahasa Indonesia
        
}
    }

>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a
