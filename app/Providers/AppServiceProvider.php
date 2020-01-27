<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use App\Ebook;
use App\Email;
use App\Etube;
use App\Kategori;

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
        Schema::defaultStringLength(191);
        
        View::share('emailCard', Email::get());
        View::share('ebookViews', Ebook::take(5)->latest()->get());
        View::share('CarouselebookViews', Ebook::take(10)->get());
        View::share('kategoriViews', Kategori::latest()->get());
        View::share('a','1');
    }
}
