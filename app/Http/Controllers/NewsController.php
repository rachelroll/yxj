<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // 资讯列表页
    public function index($category_id)
    {
        $news = News::where('category', $category_id)->get();

        return view('news/index', compact('news'));
    }

    // 资讯详情页
    public function show($id)
    {
        $news = News::where('id', $id)->get();

        return view('news/show', compact('news'));
    }
}
