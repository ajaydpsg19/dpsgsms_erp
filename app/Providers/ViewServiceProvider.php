<?php

namespace App\Providers;

use App\Http\Controllers\SideMenuController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('sidebar', function ($view) {
            $menuController = new SideMenuController();
            $menuItems = $menuController->getMenu();
            $view->with('menuItems', $menuItems);
        });
    }
}
