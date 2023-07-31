<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;


Route::get( '/', [ GameController::class, 'show' ] )->name( 'game' );
