<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use CurrencyApi\CurrencyApi\CurrencyApiClient;

class CurrencyExchange extends Controller

{
    public function requestCurrency()
    {
        $currencyApi = new CurrencyApiClient('U0XClEtdU0Ae8wCqBWeEofOCXBd8Zw4ktSqlwi5J');

        return $currencyApi->latest([
            'base_currency' => 'VND',
            'currencies'    => 'EUR',
        ]);
    }
}
