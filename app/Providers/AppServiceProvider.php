<?php

namespace App\Providers;

use Illuminate\Support\Str;
use App\Helpers\UniqueSlugGenerator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //eger loading
        Model::preventLazyLoading(!$this->app->isProduction());
    }
}
