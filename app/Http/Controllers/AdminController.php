<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        return view('admin.dashboard', [
            "category" => Category::count(),
            "article" => Article::count(),
            "published" => Article::where('status', 'Published')->count(),
            "archived" => Article::where('status', 'Archived')->count(),
        ]);
    }
}
