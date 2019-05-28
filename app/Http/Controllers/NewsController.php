<?php

namespace App\Http\Controllers;

use App\News;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // 资讯列表页
    public function index($category_id)
    {
        $news = News::where('category', $category_id)
            ->where('enabled', 1)
            ->get();
        if ($news) {
            foreach ($news as &$item) {
                $item->month = Carbon::createFromDate($item->time)->month;
                $item->date = Carbon::createFromDate($item->time)->day;
            }

            return view('news/index', compact('news','category_id'));
        }
    }

    // 资讯详情页
    public function show($id)
    {
        $news = News::where('id', $id)->get();

        return view('news/show', compact('news'));
    }
}
