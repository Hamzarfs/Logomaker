<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Category;
use App\Models\Font;
use Illuminate\Support\Facades\Log;

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
    public function vvboot(): void
    {
        view()->composer(['site.layouts.header', 'site.layouts.footer'], function ($view) {
            $categories = Category::where('is_top', true)->get();
            $logoFonts = Font::all();

            // Correctly pass the data to the view
            $view->with([
                'categories' => $categories,
                'logoFonts' => $logoFonts
            ]);
        });

        Paginator::useBootstrapFive();
    }

    public function boot(): void
    {
    view()->composer(['site.layouts.header', 'site.layouts.footer', 'site.common'], function ($view) {
        $categories = Category::where('is_top', true)->get();
        $logoFonts = Font::all();

        // Log the data to confirm
        Log::info('Logo Fonts:', $logoFonts->toArray());

        $view->with([
            'categories' => $categories,
            'logoFonts' => $logoFonts
        ]);
    });

    Paginator::useBootstrapFive();
}


}
