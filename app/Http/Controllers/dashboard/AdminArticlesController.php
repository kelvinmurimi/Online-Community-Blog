<?php

declare(strict_types=1);

namespace App\Http\Controllers\dashboard;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    public function store(Request $request)
    {
        //
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