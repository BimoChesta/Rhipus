<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
<<<<<<< HEAD
use Illuminate\Foundation\Application;
=======
>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a

trait CreatesApplication
{
    /**
     * Creates the application.
<<<<<<< HEAD
     */
    public function createApplication(): Application
=======
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
