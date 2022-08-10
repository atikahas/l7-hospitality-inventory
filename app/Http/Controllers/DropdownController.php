<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class DropdownController extends Controller
{
    public function getCategory(Request $request) {
        $category = DB::table('item_category')->where($request->all())->get();
        return response()->json($category);
    }
}
