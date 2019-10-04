<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD

=======
use Illuminate\Support\Facades\Schema; 
>>>>>>> masih belum selesai tapi mau ngerjakan di lain laptop lain yang gk dipake
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
<<<<<<< HEAD
        //
=======
        Schema::defaultStringLength(191);
>>>>>>> masih belum selesai tapi mau ngerjakan di lain laptop lain yang gk dipake
    }
}
