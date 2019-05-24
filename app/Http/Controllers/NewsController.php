<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // ��Ѷ�б�ҳ
    public function index($category_id)
    {
        $news = News::where('category', $category_id)->get();

        return view('news/index', compact('news'));
    }

    // ��Ѷ����ҳ
    public function show($id)
    {
        $news = News::where('id', $id)->get();

        return view('news/show', compact('news'));
    }
}
