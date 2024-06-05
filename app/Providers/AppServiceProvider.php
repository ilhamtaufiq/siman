<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;


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
        Model::unguard();
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
            ->flags([
                'en' => asset('flags/usa.svg'),
                'id' => asset('flags/indonesia.svg')
            ])
                ->locales(['id','en']); // also accepts a closure
        });
    }
}
