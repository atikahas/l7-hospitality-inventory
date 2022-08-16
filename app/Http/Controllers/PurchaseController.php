<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use App\Models\Item;

class PurchaseController extends Controller
{
    public function index() {
        $item = DB::select("
            select 
            item_location.name as location, 
            item_category.name as category, 
            item_subcategory.name as subcategory, 
            (item_management.`current_stock` - item_management.`initial_stock`) as stockstatus,
            ((item_management.`current_stock`/item_management.`initial_stock`)*100) as percentstock,
            item_management.*
            from item_location
            left join item_management on item_location.id = item_management.location_id
            left join item_category on item_category.id = item_management.category_id
            left join item_subcategory on item_subcategory.id = item_management.subcategory_id
            where item_management.id is not null and (item_management.`current_stock` - item_management.`initial_stock`) < 0
        ");
        return view('purchase.index', ['item' => $item]);
    }
}
