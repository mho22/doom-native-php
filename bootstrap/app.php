<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\HandleInertiaRequests;


return Application::configure( basePath : dirname( __DIR__ ) )
    ->withRouting( web : base_path( "/routes/web.php" ) )
    ->withMiddleware( fn( Middleware $middleware ) => $middleware->web( append : [ HandleInertiaRequests::class ] ) )
    ->withExceptions()
    ->create();
