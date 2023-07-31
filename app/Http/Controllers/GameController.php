<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;


class GameController extends Controller
{
    function show() : Response
    {
        return Inertia::render( 'Game', [ 'title' => 'doom' ] );
    }
}
