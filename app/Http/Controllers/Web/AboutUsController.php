<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    public function index()
    {
        return view('modules.aboutus.index');
    }
}
