<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index($category_id)
    {
        if ($category_id == 22) {
            return view('projects/train', compact('category_id'));
        }
        $projects = Project::where('category', 'like', $category_id.'%')->get();

        return view('projects/index', compact('projects', 'category_id'));
    }

    public function show($id)
    {
        $project = Project::find($id);

        return view('projects/show', compact('project'));
    }

    public function search(Request $request)
    {
        $district = $request->district;
        $category = $request->category;

        $projects = Project::where([
            ['district', '=', $district],
            ['category', 'like', '%'.$category.'%']
        ])->get();

        return view('projects/search', compact('projects'));
    }

    // 案例检索
    public function aljs()
    {
        return view('projects/aljs');
    }
}
