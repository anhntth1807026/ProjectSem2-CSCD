<?php


namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckLoginUser
{
    public function handle($request , Closure $next){
        if (!get_data_user('web')){
            return redirect()->route('get.login');
        }

        return $next($request);
    }
//    public function handle($request, Closure $next, $guard =null)
//    {
//        switch($guard){
//            case 'user':
//                if (Auth::guard('web')->check()) {
//                    return redirect()->route('get.login');
//                }
//                break;
//
//            default:
//                if (Auth::guard($guard)->check()) {
//                    return redirect('/');
//                }
//                break;
//        }
//        return $next($request);
//    }
}
