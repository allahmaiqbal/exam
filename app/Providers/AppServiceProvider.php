<?php

namespace App\Providers;

use Illuminate\Support\Str;
use App\Helpers\UniqueSlugGenerator;
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
        //
        // Str::macro('uniqueSlug', function (string $model, string $value, string $column = 'slug', int $except = null, ?string $exceptColumnName = 'id' ) {
        //     return UniqueSlugGenerator::builder($model, $value, $column, $except , $exceptColumnName,)
        //         ->generate();
        // });
    }
}
