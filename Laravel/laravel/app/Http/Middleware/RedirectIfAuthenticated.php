<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\RedirectIfAuthenticated as Middleware;

class RedirectIfAuthenticated extends Middleware
{
    /**
     * The URIs that should be excluded from redirection.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
