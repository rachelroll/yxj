<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlatformController extends Controller
{
    // 项目决策委员会
    public function committee()
    {
        return view('platform/committee');
    }

    // 资助顾问
    public function consultant()
    {
        return view('platform/consultant');
    }

    // 合作伙伴
    public function partner()
    {
        return view('platform/partner');
    }

    // 俱乐部
    public function club()
    {
        return view('platform/club');
    }
}
