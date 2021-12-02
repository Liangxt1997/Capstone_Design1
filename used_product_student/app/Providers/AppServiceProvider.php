<?php

namespace App\Providers;

use App\Categories;
use App\Tags;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\HttpFoundation\Session\Session;

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
//        View::share(Auth::user());
        Schema::defaultStringLength(1910);
        //语言列表

        $categories = Categories::query()->get();
//        var_dump(var_dump($categories));
//        var_dump($suppliers);die();
        $tags = Tags::query()->get();
        $session = new Session();
        App::setLocale("hw");
        $lalist = ['hw' => trans('index.hw'),'zh' => trans('index.zh')];
        View::share('language', $lalist);
        View::share('setLanguage', $lalist[$session->get('language')??'hw']);
        View::share('userdata', ['name' => $session->get('username'), 'email' => $session->get('email')]);
        View::share('categories', $categories);
        View::share('tags', $tags);
        View::share('timers', [
            '01' => '01',
            '02' => '02',
            '03' => '03',
            '04' => '04',
            '05' => '05',
            '06' => '06',
            '07' => '07',
            '08' => '08',
            '09' => '09',
            '10' => '10',
            '11' => '11',
            '12' => '12',
            '13' => '13',
            '14' => '14',
            '15' => '15',
            '16' => '16',
            '17' => '17',
            '18' => '18',
            '19' => '19',
            '20' => '20',
            '21' => '21',
            '22' => '22',
            '23' => '23',
            '24' => '24',
        ]);
    }
}
