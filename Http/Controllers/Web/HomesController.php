<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class HomesController extends Controller
{
    public function index()
    {
        return view('modules.home.index');
    }
}
