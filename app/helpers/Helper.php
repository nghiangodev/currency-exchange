<?php

namespace App\helpers;


use PhpParser\Node\Stmt\Case_;

if (!function_exists('checkActiveLink')) {
    function checkActiveLink($endpoint)
    {
        $className = '';
        if (\request()->getRequestUri() === $endpoint){
            $className = 'active';
        }

        return $className;
    }
}
