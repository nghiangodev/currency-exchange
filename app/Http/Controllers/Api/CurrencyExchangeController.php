<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use CurrencyApi\CurrencyApi\CurrencyApiClient;
use Illuminate\Http\Request;

class CurrencyExchangeController extends Controller

{
    protected $baseUrl = 'https://api.currencyapi.com/';
    protected $endpointCurrencies = 'v3/latest?apikey=U0XClEtdU0Ae8wCqBWeEofOCXBd8Zw4ktSqlwi5J&currencies=EUR%2CUSD%2CCAD';
    protected $endpointAllCurrencies = 'v3/latest?apikey=U0XClEtdU0Ae8wCqBWeEofOCXBd8Zw4ktSqlwi5J';

    public function getList(): array
    {
        $jsonData = file_get_contents(public_path('/assets/documents/currency-exchange.json'));

        $data = json_decode($jsonData, true);

        return array_keys($data);
    }
    public function requestCurrency(Request $request)
    {
        dd($request);

        $currencyApi = new CurrencyApiClient('U0XClEtdU0Ae8wCqBWeEofOCXBd8Zw4ktSqlwi5J');

        return $currencyApi->latest([
            'base_currency' => 'VND',
            'currencies'    => 'EUR',
        ]);
    }
}
