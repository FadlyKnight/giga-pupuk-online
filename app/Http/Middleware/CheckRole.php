<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class CheckRole
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        // dd( ($request->user()->hasRole($role)) );
        

        if (! $request->user()->hasRole($role)) {

            // return 'BUKAN PUNYA ELU'; 
            return redirect('/');
            // return redirect()->back()->with('error','Tidak Memiliki Hak Akses');
        }

        return $next($request);
    }

}