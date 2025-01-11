<?php

namespace App\Providers;

use App\Models\KuhusuSisi;
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
        $setting = KuhusuSisi::select('name', 'address', 'phone1', 'phone1', 'email1', 'email2','working_hour','pobox','logo','facebook','twitter','instagram','telegram','youtube','linkedin')->first();
        View::share(['global_setting'=>$setting]);
    }
}
