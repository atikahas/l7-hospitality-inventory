<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use App\Models\Item;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $countitem = Item::where('category_id', '=', 6)->count();
        $stockitem = DB::select("
            select 
            item_subcategory.name as subcategory, 
            sum(item_management.`initial_stock`) as initialstock,
            sum(item_management.`current_stock`) as currentstock,
            ((sum(item_management.`current_stock`)/sum(item_management.`initial_stock`))*100) as percentstock
            from item_location
            left join item_management on item_location.id = item_management.location_id
            left join item_category on item_category.id = item_management.category_id
            left join item_subcategory on item_subcategory.id = item_management.subcategory_id
            where item_management.id is not null 
            group by item_management.`subcategory_id`
        ");
        return view('home', [
                            'countitem' => $countitem,
                            'stockitem' => $stockitem]);
    }
}
