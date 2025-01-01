<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
<<<<<<< HEAD
    public function hosts(): array
=======
    public function hosts()
>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
