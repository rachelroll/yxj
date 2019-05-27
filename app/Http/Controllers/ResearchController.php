<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResearchController extends Controller
{
    // 关于我们
    public function aboutUs()
    {
        return view('research/aboutUs');
    }
}
