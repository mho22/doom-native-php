<?php

namespace App\Providers;

use Native\Laravel\Facades\Window;
use Native\Laravel\Facades\Menu;


class NativeAppServiceProvider
{
    public function boot() : void
    {
        Menu::create( Menu::make( Menu::fullscreen(), Menu::devTools(), Menu::quit()->label( 'Quit Doom' ) )->label( config( 'app.name' ) ) );

        Window::open()->width( 800 )->height( 500 )->titleBarHidden()->showDevTools( false );
    }
}
