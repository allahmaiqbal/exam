<?php

namespace App\Providers;


// use UniqueSlugGenerator;
use Illuminate\Support\Str;
use App\Helpers\UniqueSlugGenerator;
use Illuminate\Support\ServiceProvider;

class MecroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
         //
         Str::macro('uniqueSlug', function (string $model, string $value, string $column = 'slug' ) {
            return UniqueSlugGenerator::builder($model, $value, $column,)
                ->generate();
        });
    }
}
