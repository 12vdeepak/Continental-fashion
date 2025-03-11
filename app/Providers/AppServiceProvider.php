<?php

namespace App\Providers;

use App\Models\Color;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $colors = Color::all(); // or Color::pluck('name'); if you only need names

        // Share this variable with all views
        View::share('colors', $colors);
    }
}
