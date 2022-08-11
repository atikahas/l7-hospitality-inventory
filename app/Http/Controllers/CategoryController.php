<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use App\Models\Category;
use App\Models\SubCategory;

class CategoryController extends Controller
{
    public function index() {
        $allcategory = DB::select("
            select item_category.id category_id, item_subcategory.id subcategory_id, item_category.name category, item_subcategory.name subcategory from item_category 
            left join item_subcategory 
            on item_category.`id` = item_subcategory.`category_id`
        ");
        $category = Category::all();
        $subcategory = SubCategory::all();

        return view('category.index', ['allcategory' => $allcategory, 'category' => $category, 'subcategory' => $subcategory]);
        // return Category::with('SubCategory')->get();
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

    public function editCategory(Category $category) {
        return view('category.edit-category', ['category' => $category]);
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
