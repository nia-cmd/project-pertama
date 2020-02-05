<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $data_driver = \App\Driver::all();
        return view('driver.index', ['data_driver' => $data_driver]);
    }

    public function create()
    {
        return 'Form disubmit';
    }
}
