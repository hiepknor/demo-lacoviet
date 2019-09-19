<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Mckenziearts\Shopper\Plugins\Catalogue\Models\Category;

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
        $globalParams = [
            'allCategories' => Category::get(),
        ];
        return View::share('globalParams', $globalParams);
    }
}
