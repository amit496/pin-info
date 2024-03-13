<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbaordController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }
}
