<?php

namespace App\Http\Controllers;

use App\News;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // ��ҳ
    public function home()
    {
        $news_lists = News::where('enabled', 1)->get();

        if ($news_lists) {
            foreach ($news_lists as &$item) {
                $item->month = Carbon::createFromDate($item->time)->month;
                $item->date = Carbon::createFromDate($item->time)->day;
                $item->year = Carbon::createFromDate($item->time)->year;
            }
            return view('home', compact('news_lists'));
        }
    }

    // ��Ѷ�б�ҳ
    public function index($category_id)
    {
        $news = News::where('category', $category_id)
            ->where('enabled', 1)
            ->paginate(2);
        if ($news) {
            foreach ($news as &$item) {
                $item->month = Carbon::createFromDate($item->time)->month;
                $item->date = Carbon::createFromDate($item->time)->day;
            }

            return view('news/index', compact('news','category_id'));
        }
    }

    // ��Ѷ����ҳ
    public function show($id)
    {
        $news = News::find($id);

        $lists = News::where('enabled', 1)->orderby('time')->limit(4)->get();

        return view('news/show', compact('news', 'lists'));
    }
}
