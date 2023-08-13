<?php

declare(strict_types=1);

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AdmincategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy','edit']);
    }
    public function index()
    {
        //
        $categories=Category::latest()->paginate(5);
        return view('admin.categories.index',[
            'Categories'=>$categories,
        ]);

    }

    public function create()
    {
        //
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
        $category=Category::findOrFail($id);
        $category->delete();
        return redirect(route('categories.index'))->with('danger', 'Category deleted successfully!');
    }
}
