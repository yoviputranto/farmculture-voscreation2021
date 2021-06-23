<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use App\Category;
use RealRashid\SweetAlert\Facades\Alert;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::with(['category'])->get();

        return view('admin.article.index', [
            'articles' => $articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin.article.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        //
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['title'] = Str::title($request->title);
        $data['author'] = Str::title($request->author);
        $data['user_id'] = auth()->id();
        $data['image'] = $request->file('image')->store(
            'assets/gallery',
            'public'
        );

        Article::create($data);

        Alert::success('Success', 'Successfully add a new article');
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $article = Article::findorFail($id);
        $categories = Category::all();

        return view('admin.article.edit', [
            'article' => $article,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        //
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $data['title'] = Str::title($request->title);
        $data['author'] = Str::title($request->author);
        $data['user_id'] = auth()->id();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store(
                'assets/gallery',
                'public'
            );
        }


        $article = Article::findOrFail($id);

        $article->update($data);
        Alert::success('Success', 'Successfully updated the article');

        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $article = Article::findOrFail($id);
        $article->delete();
        Alert::success('Success', 'Successfully deleted the article');

        return redirect()->route('article.index');
    }

    public function showPublished()
    {
        $articles = Article::where('status', 'Published')->with(['category'])->get();

        return view('admin.article.pubarticle', [
            'articles' => $articles
        ]);
    }

    public function showArchived()
    {
        $articles = Article::where('status', 'Archived')->with(['category'])->get();

        return view('admin.article.archarticle', [
            'articles' => $articles
        ]);
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $articles = Article::where('title', 'like', "%" . $keyword . "%")->get();
        $items = Category::with(['article'])->get();
        return view('admin.article.index', [
            'items' => $items,
            'articles' => $articles,
            'keyword' => $keyword
        ]);
    }
}
