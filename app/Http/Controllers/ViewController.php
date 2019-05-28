<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    // 国内办公室
    public function internalOffice()
    {
        return view('xj_view/internal');
    }

    // 国外办公室
    public function overseasOffice()
    {
        return view('xj_view/overseas');
    }
}
