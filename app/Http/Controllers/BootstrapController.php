<?php

namespace App\Http\Controllers;

class BootstrapController extends AppController
{
    public function index($name)
    {
        return view('bootstrap.'.$name);
    }
}
