<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleCategory;
use App\Models\Article;

class ArticleCategoryController extends Controller
{
    public function index(){
        $article_categories = Category::all();
        return view('articleCategories', compact('categories'));
    }

    public function getAll(){
        $categories = ArticleCategory::all();
        return view('welcome', compact('article_categories'));
    }

    public function create()
    {
        return view('createArticleCategory');
    }

    public function store(Request $request){
        $request->validate([
            'ArticleCategoryName' => 'required|max:255',
            'ArticleCategoryDescription' => 'required|max:255',
        ]);

    	$data = new ArticleCategory;
    	$data->ArticleCategoryName = $request->ArticleCategoryName;
        $data->ArticleCategoryDescription = $request->ArticleCategoryDescription;
        $data->save();
        return Redirect()->route('home');
    }

    public function getCategoryByIdGuest($id){
        $article_category = ArticleCategory::where('ArticleCategoryId','=', $id)->first();
        $articles = Article::where('ArticleCategoryId', '=', $id)->paginate(10);
        return view('articles.articles-category-guest', compact('article_category', 'articles'));
    }

    public function getCategoryByIdUser($id){
        $article_category = ArticleCategory::where('ArticleCategoryId','=', $id)->first();
        $articles = Article::where('ArticleCategoryId', '=', $id)->paginate(10);
        return view('articles.articles-category-user', compact('article_category', 'articles'));
    }

    public function getCategoryByIdAdmin($id){
        $article_category = ArticleCategory::where('ArticleCategoryId','=', $id)->first();
        $articles = Article::where('ArticleCategoryId', '=', $id)->paginate(10);
        return view('articles.articles-category-admin', compact('article_category', 'articles'));
    }

    public function getCategoryByName($name){
        $category = ArticleCategory::where('ArticleCategoryName','=', $name)->get();
        return view('category', compact('category'));
    }

    public function deleteCategory($id){
        $category = ArticleCategory::find($id); 

        if ($category) {
            $category->delete();
            return redirect()->route('categories')->with('success', 'Category deleted successfully!');
        } else {
            return redirect()->route('categories')->with('error', 'Category not found!');
        }
    }

    public function updatePage($id){
        $category = ArticleCategory::find($id);
        return view('updateArticleCategory', compact('category'));
    }

    public function updateCategory(Request $requestm, $id){

        $category = ArticleCategory::find($id);

        $request->validate([
            'ArticleCategoryName' => 'required|max:255',
            'ArticleCategoryDescription' => 'required|max:255',
        ]);

        $category->ArticleCategoryName = $request->ArticleCategoryName;
        $category->ArticleCategoryDescription = $request->ArticleCategoryDescription;

        $category->save();
        return redirect()->route('home')->with('success', 'Article category updated successfully.');
    }
}