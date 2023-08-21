<?php

declare(strict_types=1);

namespace App\Http\Controllers\Authers;

use App\Models\Category;
use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AutherController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }
    //
    public function index(User $user)
    {
        $articles= $user->article()->with(['user', 'likes'])->paginate(15);
        $categories=Category::with('article')->latest()->get();
        return view('articles.authers.index', [
            'user' => $user,
            'articles' => $articles,
            'categories'=>$categories
        ]);
    }
    public function manageAutherArticles(){
        $user_id=auth()->user()->id;
        $articles = Article::where('user_id',$user_id)->latest()->paginate(15);
        return view('admin.articles.manage',[
            'articles'=>$articles,
        ]);
    }






}
