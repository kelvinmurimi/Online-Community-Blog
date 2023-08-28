<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CommentsController extends Controller
{
    public function index()
    {
        //
    }

    public function create(CreateCommentRequest $request,$id)
    {
        //
          $request->validated();
          Comment::create([
            'user_id'=>Auth::user()->id,
            'article_id'=>$id,
            'content'=>$request->content,
          ]);
          return Redirect::back()->with('success', 'comment  created successfully!');
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
        $comment=Comment::findOrFail($id);
        $comment->delete();
         return Redirect::back()->with('danger', 'comment  Deleted successfully!');
    }
}
