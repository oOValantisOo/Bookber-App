<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all(); 
        return view('articlesIndex', compact('articles')); 
    }

    public function create()
    {
        $categories = ArticleCategory::All();
        return view('createArticle', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ArticleTitle' => 'required|max:255',
            'ArticleDescription' => 'required|max:255',
            'PublishDate' => 'required|date',
            'ArticleContent' => 'required|max:255',
            'Writer' => 'required|max:255',
            'ArticleCategoryId' => 'required|exists:ArticleCategory, ArticleCategoryId',
        ]);

        $data = new Article;
        $data->ArticleTitle = $request->ArticleTitle;
        $data->ArticleDescription = $request->ArticleDescription;
        $data->PublishDate = $request->PublishDate;
        $data->ArticleCategoryId = $request->ArticleCategoryId;
        $data->Writer = $request->Writer;
        $data->ArticleContent = $request->ArticleContent;

        $data->save();

        return redirect()->route('articlesIndex')->with('success', 'Article created successfully!');
    }

    public function showArticle($id)
    {
        $article = Article::find($id); 

        if ($article) {
            return view('article', compact('article'));
        } else {
            return redirect()->route('articlesIndex')->with('error', 'Article not found!');
        }
    }

    public function updatePage($id){
        $article = Article::find($id);
        if(!$article){
            return redirect()->route('articlesIndex')->with('error', 'Article not found!');
        }
        $categories = ArticleCategory::All();
        return view('updateArticle', compact('article', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $data = Article::find($id);

        $request->validate([
            'ArticleTitle' => 'required|max:255',
            'ArticleDescription' => 'required|max:255',
            'PublishDate' => 'required|date',
            'ArticleContent' => 'required|max:255',
            'Writer' => 'required|max:255',
            'ArticleCategoryId' => 'required|exists:ArticleCategory, ArticleCategoryId',

        ]);

        $data->ArticleTitle = $request->ArticleTitle;
        $data->ArticleDescription = $request->ArticleDescription;
        $data->PublishDate = $request->PublishDate;
        $data->ArticleCategoryId = $request->ArticleCategoryId;
        $data->Writer = $request->Writer;
        $data->ArticleContent = $request->ArticleContent;

        $data->save();
        return redirect()->route('articlesIndex')->with('success', 'Article updated successfully!');
    }

    public function deleteArticle($id)
    {
        $article = Article::find($id); 

        if ($article) {
            $article->delete();
            return redirect()->route('articlesIndex')->with('success', 'Article deleted successfully!');
        } else {
            return redirect()->route('articlesIndex')->with('error', 'Article not found!');
        }
    }

    public function search(Request $request){
        $article_title = $request->input('article_title');
        $results = Article::where('ArticleTitle', 'Like', '%'. $article_title .'%')->get();

        return view('articleSearch', compact('results'));
    }
}