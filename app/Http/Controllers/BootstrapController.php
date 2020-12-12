<?php

namespace App\Http\Controllers;

class BootstrapController extends AppController
{
    public function index($name)
    {
        $this->_pageName = 'bootstrap.'.$name;
        $this->render();
    }
}
