<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Models\Category;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    public function store(Request $request) {
        try {
            $data = $request->except(['_token']);
            SubCategory::create($data);
            return redirect('category/view')->with('success', 'New SubCategory Added');
        } catch(\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }
}
