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

    public function getList(Request $request): array
    {
        $jsonData = file_get_contents(public_path('/assets/documents/currency-exchange.json'));

        $data = json_decode($jsonData, true);

        $newArray = [];

// Loop through each key-value pair
        foreach ($data as $key => $value) {
            // Set key as the value for each element in new array
            $newArray[] = [
                'id'   => $key,
                'text' => $key,
            ];
        }

        if ($request->q) {
            $newArray = array_values(array_filter($newArray, function ($item) use ($request) {
                return strpos($item['id'], strtoupper($request->q)) === 0;
            }));
        }

        return $newArray;
    }

    public function requestCurrency(Request $request)
    {
        $currencyApi = new CurrencyApiClient('U0XClEtdU0Ae8wCqBWeEofOCXBd8Zw4ktSqlwi5J');
        $data        = $currencyApi->latest([
            'base_currency' => $request->currentfrom,
            'currencies'    => $request->currentTo,
        ]);

        if ( ! isset($data['errors'])) {
            $currency          = $data['data'];
            $valueInputFrom    = str_replace(['.', ','], '', $request->valueFrom);
            $currencyFromValue = $currency[$request->currentTo]['value'];
            $exchange          = $valueInputFrom * $currencyFromValue;

            return response([
                'data'     => $data['data'],
                'exchange' => $exchange,
            ]);
        }

        return response([
            'data' => $data,
        ]);

    }
}
