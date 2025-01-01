<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
<<<<<<< HEAD
     */
    public function boot(): void
=======
     *
     * @return void
     */
    public function boot()
>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
