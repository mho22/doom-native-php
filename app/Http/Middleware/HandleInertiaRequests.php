<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;


class HandleInertiaRequests extends Middleware
{
    protected $rootView = 'app';

    public function version( Request $request ) : string | null
    {
        return parent::version( $request );
    }

    public function share( Request $request) : array
    {
        return array_merge( parent::share( $request ), [
            'csrf' => csrf_token(),
            'locale' => App::currentLocale(),
            'locales' => config( 'app.available_locales' ),
            'translations' => File::exists( lang_path( App::currentLocale() . ".json" ) ) ? File::json( lang_path( App::currentLocale() . ".json" ) ) : []
        ] );
    }
}
