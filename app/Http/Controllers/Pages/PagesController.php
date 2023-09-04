<?php

declare(strict_types=1);

namespace App\Http\Controllers\Pages;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;


use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Models\Category;

class PagesController extends Controller
{
    //
    //Home Page
    public function index()
    {
        $categories = Category::with('article')->latest()->get($columns = ['*']);
        $articles = Article::with(['user', 'likes'])->latest()->paginate(6); //'categories'
        $home_slider = Article::with(['user', 'likes'])->latest()->paginate(3);
        return view('pages.home', [
            'articles' => $articles,
            'home_slider' => $home_slider,
            'categories' => $categories
        ]);
    }

    //Contact Page
    public function contact()
    {
        return view('pages.contact');
    }

    public function store(ContactFormRequest $req)
    {
        $req->validated();
        Contact::create([
            'name' => $req->name,
            'phone' => $req->name,
            'email' => $req->name,
            'content' => $req->name,
        ]);
        return redirect(route('pages.contact'))->with('success', 'message delivered successfully,we will be in touch soon');
    }


}