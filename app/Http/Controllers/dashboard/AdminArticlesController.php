<?php

declare(strict_types=1);

namespace App\Http\Controllers\dashboard;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateArticleRequest;

class AdminArticlesController extends Controller
{
    public function index()
    {
        //
        $articles=Article::latest()->paginate(6);
        return view('admin.articles.index',[
            'articles'=>$articles,
        ]);
    }

    public function create()
    {
        //
        return view('admin.articles.create');
    }

    public function store(CreateArticleRequest $request)
    {
        $request->validated();

       // if($request->hasFile('cover_image')) {
        // $cover_image=time().'.'.$request->cover_image->extension();
        // $request->cover_image->move(public_path('images/articles'),$cover_image);
       // }
       $cover_image='images/articles'.'/'.time().'.'.$request->cover_image->extension();
       $request->cover_image->move(public_path('images/articles'),$cover_image);

        $slug=Str::slug($request->title,'-');
        $request->user()->article()->create([
            'title'=>$request->title,
            'slug'=>$slug,
            'min_to_read'=>rand(5,15),
            'image'=>$cover_image,
            'is_published'=>1,
            'excerpt'=>$request->excerpt,
            'body'=>$request->content,
            'views'=>rand(5,200),
        ]);
        return redirect(route('admin.articles.index'))->with('success', 'Article  created successfully!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
