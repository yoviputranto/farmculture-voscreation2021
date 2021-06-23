<?php

namespace App\Http\Controllers;

use App\Category;
use App\Article;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    public function home()
    {
        $articles = Article::with(['category'])->get();
        return view('frontend.home', [
            'articles' => $articles
        ]);
    }

    public function article()
    {
        $items = Category::with(['article'])->get();
        $articles = Article::with(['category'])->get();

        return view('frontend.news', [
            'items' => $items,
            'articles' => $articles
        ]);
    }

    public function detail(Request $request, $slug)
    {
        $article = Article::with(['category'])
            ->where('slug', $slug)
            ->firstOrFail();
        $items = Article::with(['category'])->orderBy('created_at', 'desc')->take(5)->get();

        return view('frontend.newsdetail', [
            'article' => $article,
            'items' => $items
        ]);
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $articles = Article::where('title', 'like', "%" . $keyword . "%")->get();
        $items = Category::with(['article'])->get();
        return view('frontend.search', [
            'items' => $items,
            'articles' => $articles,
            'keyword' => $keyword
        ]);
    }
}
