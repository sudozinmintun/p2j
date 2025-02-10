<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use App\Models\Client;

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
        $total_client = Client::count();
        view()->share('total_client', $total_client);
    }
}
