<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    //
    public function submit_request()
    {
        return view('submit_request');
    }

    public function submitted_request()
    {
        return view('submitted_request');
    }
}
