<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get( '/', fn() => Inertia::render( 'Game', [ 'title' => 'doom' ] ) )->name( 'game' );
