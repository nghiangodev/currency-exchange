<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ExchangesController extends Controller
{
    public function index()
    {
        return view('modules.exchange.index');
    }
}
