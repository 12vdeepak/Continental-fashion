<?php

namespace App\Providers;

use App\Models\Color;
use App\Models\Size;
use App\Models\Banner;
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
        $banners = Banner::where('status', '=', 1)->get();


        // Correct way to share multiple variables with all views
        View::share([
            'colors' => $colors,
            'sizes' => $sizes,
            'banners' => $banners
        ]);
    }
}
