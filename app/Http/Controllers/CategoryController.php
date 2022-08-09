<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $category = Category::all();
        return view('category.index', ['category' => $category]);
    }

    public function store(Request $request) {
        try {
            $data = $request->except(['_token']);
            Category::create($data);
            return redirect('category/view')->with('success', 'New Category Added');
        } catch(\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }

    public function edit(Category $category) {
        return view('category.edit', ['category' => $category]);
    }

    public function update(Request $request, Category $category) {
        try {
            $data = $request->except(['_token']);
            $category->update($data);
            return redirect('category/view')->with('success', 'Category Updated.');
        } catch(\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }
}
