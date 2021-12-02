<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $session = new \Symfony\Component\HttpFoundation\Session\Session();
        App::setLocale($session->get('language')??'hw');
//        if (Session::has('locale') && in_array(Session::get('locale'), ['en', 'zh'])) {
//            App::setLocale(Session::get('locale'));
//        } else {
//            App::setLocale('hw');
//        }
        return $next($request);
    }
}
