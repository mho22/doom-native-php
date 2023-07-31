<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpFoundation\Response;
use Inertia\Response as InertiaResponse;
use App\Enums\Code;
use Inertia\Inertia;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;


class Handler extends ExceptionHandler
{
    protected $levels = [ ];

    protected $dontReport = [ ];

    protected $dontFlash = [ 'current_password', 'password', 'password_confirmation' ];


    public function register() : void
    {
        $this->reportable( function( Throwable $e ) { } );
    }

    public function render( $request, Throwable $exception ) : Response | InertiaResponse
    {
        $response = parent::render( $request, $exception );

        return $response;
    }
}
