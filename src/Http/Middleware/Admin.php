<?php

namespace Roocket\Cms\Http\Middleware;

use Closure;

class admin
{
    public function handle($request, Closure $next, $protected = null){
        if ($protected == 'protected')
            return redirect('/');
        var_dump('admin');die;
        return $next($request);
    }
}