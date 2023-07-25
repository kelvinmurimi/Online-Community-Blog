<?php

declare(strict_types=1);

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    //Home Page
    public function index(){
        $home_slider=Article::latest()->paginate(3);
        $articles=Article::latest()->paginate(6);
        return view('pages.home',[
            'articles'=>$articles,
            'home_slider'=>$home_slider
        ]);
    }

    //Contact Page
    public function contact(){
        return view('pages.home');
    }



}
