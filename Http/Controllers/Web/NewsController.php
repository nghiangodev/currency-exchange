<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        return view('modules.news.index');
    }
}
