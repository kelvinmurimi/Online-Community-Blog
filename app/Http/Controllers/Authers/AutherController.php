<?php

declare(strict_types=1);

namespace App\Http\Controllers\Authers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AutherController extends Controller
{
    //
    public function index(User $user)
    {
        $articles= $user->article()->with(['user', 'likes'])->paginate(15);

        return view('articles.authers.index', [
            'user' => $user,
            'articles' => $articles
        ]);
    }

}
