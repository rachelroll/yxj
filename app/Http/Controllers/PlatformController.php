<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlatformController extends Controller
{
    // ��Ŀ����ίԱ��
    public function committee()
    {
        return view('platform/committee');
    }

    // ��������
    public function consultant()
    {
        return view('platform/consultant');
    }

    // �������
    public function partner()
    {
        return view('platform/partner');
    }

    // ���ֲ�
    public function club()
    {
        return view('platform/club');
    }
}
