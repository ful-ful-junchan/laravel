<?php

namespace App\Http\Controllers;

class BootstrapController extends AppController
{
    public function show($name)
    {
        return view('bootstrap.'.$name);
    }
}
