<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class DropdownController extends Controller
{

    public function getLocation(Request $request) {
        $location = DB::table('item_location')->where($request->all())->get();
        return response()->json($location);
    }

    public function getSubLocation(Request $request) {
        $sublocation = DB::table('item_sublocation')->where($request->all())->get();
        return response()->json($sublocation);
    }

    public function getCategory(Request $request) {
        $category = DB::table('item_category')->where($request->all())->get();
        return response()->json($category);
    }

    public function getSubCategory(Request $request) {
        $subcategory = DB::table('item_subcategory')->where($request->all())->get();
        return response()->json($subcategory);
    }
}
