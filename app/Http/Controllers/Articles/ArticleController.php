<?php

declare(strict_types=1);

namespace App\Http\Controllers\Articles;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Controllers\Controller;


class ArticleController extends Controller
{
    //
    public function index(){
        $articles=Article::latest()->with(['user'])->paginate(20);
        return view('articles.index',[
            'articles'=>$articles,
        ]);
    }

    //Show single Article
    public function show(Article $slug){
      //  $article =Article::findOrFail($slug);
        return view('articles.show',[
            'article'=>$slug,
        ]);
    }



}
