<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
        'https://curbph.info/search_mun',
        'https://www.curbph.info/search_mun',
        'http://curbph.info/search_mun',
        'http://www.curbph.info/search_mun',

        'https://curbph.info/search_brgy',
        'https://www.curbph.info/search_brgy',
        'http://curbph.info/search_brgy',
        'http://www.curbph.info/search_brgy'
    ];
}
