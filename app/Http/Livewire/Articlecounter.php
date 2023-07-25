<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class Articlecounter extends Component
{


    public function render()
    {
        return view('livewire.articlecounter',[
            "articlescount"=>Article::all(),
        ]);
    }
}
