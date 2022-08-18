<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use App\Models\Item;
use App\Models\Location;
use App\Models\Category;
use App\Models\SubCategory;

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
    public function index(Item $item)
    {   
        $totallocation = Location::count();
        $totalcategory = Category::count();
        $totalsubcategory = SubCategory::count();

        
        $counthousekeeping = Item::where('category_id', '=', 6)->count();
        $currentstockhousekeeping = Item::where('category_id', '=', 6)->sum('current_stock');
        $initialstockhousekeeping = Item::where('category_id', '=', 6)->sum('initial_stock');
        $reorderstockhousekeeping = DB::select("
            select sum(-(a.balance)) as balance
            from
            (select `current_stock`,`initial_stock`,item_name,
            (`current_stock`-`initial_stock`) as balance
            from item_management
            where category_id = 6)a
            where a.balance < 0
        ");

        $stockhousekeeping = DB::select("
            select 
            item_category.name as category, 
            item_subcategory.name as subcategory, 
            sum(item_management.current_stock) as currentstock,
            sum(item_management.initial_stock) as initialstock,
            ((sum(item_management.current_stock)) - (sum(item_management.initial_stock))) balancestock,
            ((sum(item_management.`current_stock`)/sum(item_management.`initial_stock`))*100) as percentstock
            from item_location
            left join item_management on item_location.id = item_management.location_id
            left join item_category on item_category.id = item_management.category_id
            left join item_subcategory on item_subcategory.id = item_management.subcategory_id
            where item_management.id is not null and item_management.`category_id` = 6
            group by item_management.`subcategory_id`
        ");

        $countcutleries = Item::where('category_id', '=', 2)->count();
        $currentstockcutleries = Item::where('category_id', '=', 2)->sum('current_stock');
        $initialstockcutleries = Item::where('category_id', '=', 2)->sum('initial_stock');
        $reorderstockcutleries = DB::select("
            select sum(-(a.balance)) as balance
            from
            (select `current_stock`,`initial_stock`,item_name,
            (`current_stock`-`initial_stock`) as balance
            from item_management
            where category_id = 2)a
            where a.balance < 0
        ");
        $stockcutleries = DB::select("
            select 
            item_subcategory.name as subcategory, 
            sum(item_management.`initial_stock`) as initialstock,
            sum(item_management.`current_stock`) as currentstock,
            ((sum(item_management.`current_stock`)/sum(item_management.`initial_stock`))*100) as percentstock
            from item_location
            left join item_management on item_location.id = item_management.location_id
            left join item_category on item_category.id = item_management.category_id
            left join item_subcategory on item_subcategory.id = item_management.subcategory_id
            where item_management.id is not null and item_management.`category_id` = 2
            group by item_management.`subcategory_id`
        ");
        return view('home', [
                            'totallocation' => $totallocation,
                            'totalcategory' => $totalcategory,
                            'totalsubcategory' => $totalsubcategory,

                            'currentstockhousekeeping' => $currentstockhousekeeping,
                            'reorderstockhousekeeping' => $reorderstockhousekeeping,
                            'counthousekeeping' => $counthousekeeping,
                            'stockhousekeeping' => $stockhousekeeping,

                            'currentstockcutleries' => $currentstockcutleries,
                            'reorderstockcutleries' => $reorderstockcutleries,
                            'countcutleries' => $countcutleries,
                            'stockcutleries' => $stockcutleries]);
    }
}
