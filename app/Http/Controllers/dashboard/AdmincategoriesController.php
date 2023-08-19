<?php

declare(strict_types=1);

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\categories\CreateCategoryRequest;
use App\Http\Requests\categories\UpdateCategoryRequest;
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
        return view('admin.categories.create');
    }

    public function store(CreateCategoryRequest $request)
    {
        //
        $request->validated();
        Category::create(['name'=>$request->name]);

        return redirect(route('categories.index'))->with('success', 'Category Created successfully!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
          $category=Category::findOrFail($id);
        return view('admin.categories.edit',[
            'category'=>$category,
        ]);
    }

    public function update(UpdateCategoryRequest $request, $id)
    {
        //
        $request->validated();
        $category=Category::findOrFail($id);
        $category->update([
            'name'=>$request->name,
        ]);

        return redirect(route('categories.index'))->with('success', 'Category Updated successfully!');

    }

    public function destroy($id)
    {
        //
        $category=Category::findOrFail($id);
        $category->delete();
        return redirect(route('categories.index'))->with('danger', 'Category deleted successfully!');
    }
}
