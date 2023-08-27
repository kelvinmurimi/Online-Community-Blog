<?php

declare(strict_types=1);

namespace App\Http\Controllers\Articles;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Models\Comment;

class ArticleController extends Controller
{



    //
    public function index(){
        $categories=Category::with('article')->latest()->get();
        $articles=Article::latest()->with('user','likes')->paginate(8);
        return view('articles.index',[
            'articles'=>$articles,
            'categories'=>$categories,
        ]);
    }

    //Show single Article
    public function show(Article $slug){
      //  $article =Article::findOrFail($slug);
     // dd($slug->category_id);
      $relatedArticles=Article::where('category_id',$slug->category_id)->with(['category','user','likes'])->latest()->paginate(6);
      //dd($relatedArticles);
      $categories=Category::with('article')->latest()->get();
      $comments=Comment::where('article_id',$slug->id)->with('user')->paginate(5);
        return view('articles.show',[
            'article'=>$slug,
            'categories'=>$categories,
            'relatedArticles'=>$relatedArticles,
             'comments'=>$comments,
        ]);
    }



}
