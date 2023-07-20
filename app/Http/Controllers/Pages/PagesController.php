<?php

declare(strict_types=1);

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    //Home Page
    public function index(){
        return view('pages.home');
    }

    //Contact Page
    public function contact(){
        return view('pages.home');
    }



}
