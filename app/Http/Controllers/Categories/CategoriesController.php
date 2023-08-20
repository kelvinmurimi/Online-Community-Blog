<?php

declare(strict_types=1);

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function index($id){
        //get articles that have that category
        $articles= Article::where('category_id',$id)->with(['user', 'likes'])->paginate(15);
        //dd($articles);
        //get category for articles
        $category=Category::with('article')->where('id',$id)->first();
        $categories=Category::with('article')->latest()->get();
        return view('categories.index', [
            'category'=>$category,
            'articles' => $articles,
            'categories'=>$categories
        ]);
    }
}
