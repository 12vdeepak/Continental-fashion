<?php

namespace App\Providers;

use App\Models\Color;
use App\Models\Size;
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
        $colors = Color::all();
        $sizes = Size::all();

        // Correct way to share multiple variables with all views
        View::share([
            'colors' => $colors,
            'sizes' => $sizes
        ]);
    }
}
