<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    // ���ڰ칫��
    public function internalOffice()
    {
        return view('xj_view/internal');
    }

    // ����칫��
    public function overseasOffice()
    {
        return view('xj_view/overseas');
    }
}
