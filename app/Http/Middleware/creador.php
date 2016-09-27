<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;

use Closure;

class creador
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
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       
        switch ($this->auth->user()->id_rol) {
           
            case '1':
                return redirect()->to('Admin');
                break;
           
           case '2':
                //return redirect()->to('Creador');
                break;
            
            case '3':
                return redirect()->to('Estudiante');
                break;
            
            default:
                return redirect()->to('/');
                break;
        }
        return $next($request);
    }
}
