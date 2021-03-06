<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckLoginAdmin
{
//    public function handle($request, Closure $next, $guard =null)
//    {
//        switch($guard){
//            case 'admin':
//                if (Auth::guard($guard)->check()) {
//                    return redirect()->route('admin.login');
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

    public function handle($request , Closure $next){
        if (!get_data_user('admins')){
            return redirect()->route('admin.login');
        }

        return $next($request);
    }
}
