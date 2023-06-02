<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('modules.contactus.index');
    }
}
