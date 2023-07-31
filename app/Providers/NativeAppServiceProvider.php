<?php

namespace App\Providers;

use Native\Laravel\Facades\Window;
use Native\Laravel\Menu\Menu;


class NativeAppServiceProvider
{
    public function boot(): void
    {
        Menu::new()
            ->subMenu( config( 'app.name' ), Menu::new()->quit() )
            ->register();

        Window::open()
            ->width( 800 )
            ->height( 500 )
            ->titleBarHidden();
    }
}
