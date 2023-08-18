<?php

declare(strict_types=1);

namespace App\Http\Controllers\dashboard;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CreateArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class AdminArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy','edit']);
    }
    public function index()
    {
        //
        $articles=Article::orderBy('updated_at','desc')->paginate(25);
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

    public function edit(Article $article)
    {
        //
        //dd($article);
        //$article=Article::findOrFail($article);

        return view('admin.articles.edit',[
            'article'=>$article,
        ]);
    }

    public function update(UpdateArticleRequest $request,Article $article)
    {
        $request->validated();
        //

        $current_cover_image=$article->image();

        if ($request->hasFile('cover_image')) {
                //check if image exists then delete it
            if(File::exists($current_cover_image)){
                     File::delete($current_cover_image);
            }
            //save new image
         $cover_image='images/articles'.'/'.time().'.'.$request->cover_image->extension();
         $request->cover_image->move(public_path('images/articles'),$cover_image);
        }else{
            $cover_image=$article->image();
        }


        $slug=Str::slug($request->title,'-');
        $request->user()->article()->update([
            'title'=>$request->title,
            'slug'=>time().'-'.$slug,
            'min_to_read'=>rand(5,15),
            'image'=>$cover_image,
            'is_published'=>1,
            'excerpt'=>$request->excerpt,
            'body'=>$request->content,
            'views'=>rand(5,200),
        ]);
        return redirect(route('admin.articles.index'))->with('success', 'Article  updated successfully!');

    }

    public function destroy(Article $article)
    {
        //
        $current_cover_image=$article->image();
        if(File::exists($current_cover_image))
        {
            File::delete($current_cover_image);
        }

        $article->delete();
        return redirect(route('admin.articles.index'))->with('danger', 'Article  Deleted!');
    }
}
