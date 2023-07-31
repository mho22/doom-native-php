<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Database\Eloquent\Model;


class AppServiceProvider extends ServiceProvider
{
    public function boot() : void
    {
        Model::preventLazyLoading( ! $this->app->isProduction() );

        JsonResource::withoutWrapping();
    }
}
