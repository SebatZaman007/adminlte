<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show()
    {
        return view('admin.master');
    }
    public function edit(){
        return view('admin.pages.dashboard');
    }
}
