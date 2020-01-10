<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\SurfLessonViewComposer;
use App\Http\View\Composers\SnorkelLessonViewComposer;
use App\Http\View\Composers\SupLessonViewComposer;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('pages.surflesson', SurfLessonViewComposer::class);
        View::composer('pages.snorkel', SnorkelLessonViewComposer::class);
        View::composer('pages.sup', SupLessonViewComposer::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
