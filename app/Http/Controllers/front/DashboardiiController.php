<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardiiController extends Controller
{
    public function index()
    {
        return view('admin.pages.dash_2');
    }
}

