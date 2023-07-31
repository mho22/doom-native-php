<?php

namespace App\Http\Middleware;

use Illuminate\Routing\Middleware\ValidateSignature as Middleware;


class ValidateSignature extends Middleware
{
    protected $except = [ ];
}
