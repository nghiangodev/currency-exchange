<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function index()
    {
        return view('modules.services.index');
    }
}
