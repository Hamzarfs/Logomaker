<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Category;
use App\Models\Font;
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
        view()->composer(['site.layouts.header', 'site.layouts.footer'], function ($view) {
            $categories = Category::where('is_top', true)->get();
            $fonts = Font::all();
        
            // $view->with([
            //     'categories' => $categories,
            //     'fonts' => $fonts
            // ]);
            $view->with('categories', $categories, 'fonts', $fonts);
        });

        // view()->composer('site.layouts.footer', function ($view) {
        //     $categories = Category::where('is_top', true)->get();
        //     $view->with('categories', $categories);
        // });
        Paginator::useBootstrapFive();
    }
}
