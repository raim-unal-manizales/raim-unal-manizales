<?php

namespace App\Http\Middleware;

use Closure;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;

class RedirectIfAuthenticated
{

    protected $auth;
        
    public function __construct(Guard $auth){
        
            $this->auth = $auth;
        
        }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    
    public function handle($request, Closure $next)
    {
       /* if (Auth::guard($guard)->check()) {
            return redirect('/');
        }

        return $next($request);
        */
        if ($this->auth->check()) {

            switch ($this->auth->user()->id_rol) {
               
                case '1':
                    return redirect()->to('Admin');
                    break;
               
               case '2':
                    return redirect()->to('Creador');
                    break;
                
                case '3':
                    return redirect()->to('Estudiante');
                    break;
                
                default:
                    return redirect()->to('/');
                    break;
            }
            return redirect('/');
       }
       return $next($request);
    }
}
