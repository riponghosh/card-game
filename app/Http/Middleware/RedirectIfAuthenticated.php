<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            // return redirect('/home');
            $user = Auth::user();
            if($user->user_type==1){

                return redirect('/admin');
            }
            else{
                $data = [
                    'status'  => 'success',
                    'code'    => '201',
                    'message' => 'Login successfully.',
                ];

                return response()->json($data, 201);
            }

            
        }
        
        return $next($request);
    }
}
