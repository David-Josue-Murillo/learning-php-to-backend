<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class TrustHosts
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function hosts(Request $request)
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }

    /**
     * Get the pattern for all subdomains of the application URL.
     *
     * @return string
     */
    protected function allSubdomainsOfApplicationUrl()
    {
        return '^(.+\.)?'.preg_quote(parse_url(Config::get('app.url'), PHP_URL_HOST)).'$';
    }
}
