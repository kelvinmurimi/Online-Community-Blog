<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use Illuminate\Http\Request;

class Articlelikes extends Component
{

    public function render()
    {

        return view('livewire.articlelikes');
    }
    public function store(Article $article,Request $request){
        //dd($article);
        if ($article->likedBy($request->user())) {
            return response(null, 409);
        }
        $article->likes()->create([
            'user_id'=>$request->user()->id,

        ]);
        return back(); //response()->json(['message'=>'liked']);
    }
    public function destroy(Article $article, Request $request)
    {
        $request->user()->likes()->where('article_id', $article->id)->delete();

        return back();
    }
}
