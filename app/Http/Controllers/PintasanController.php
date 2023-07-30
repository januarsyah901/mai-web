<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PintasanController extends Controller
{
    public function index()
    {
        return view('new.pintasan');
    }
}
