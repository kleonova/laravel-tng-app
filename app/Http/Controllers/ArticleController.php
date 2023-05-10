<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::all();

        return view('articles.index', [
            'articles' => $articles,
        ]);
    }

    public function show(string $id)
    {
        $article = Article::findOrFail($id);

        return view('articles.show', [ 
            'article' => $article
        ]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:5|max:64',
            'content' => 'required|min:10|max:1000',
            'author' => '',
        ]);

        $imgPathMock = 'img/img-0' . rand(1, 6) . '.jpg';

        $article = Article::create(array_merge($validated, ['img' => $imgPathMock]));
        return redirect("/articles/{$article->id}");
    }

    public function update(Request $request) {
        dd($request);

        return view('index');
    }

    public function edit(Request $request) {
        dd($request);

        return view('index');
    }

    public function destroy(string $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect("/articles")->with('success', 'Article has been deleted successfully');
    }
}
