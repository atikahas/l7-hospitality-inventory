<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use DB;
use Auth;
use App\User;
use App\Models\Housekeeping;

class HousekeepingController extends Controller
{
    public function index() {
        $housekeeping = DB::select("
            select 
            item_location.name as location, 
            item_category.name as category, 
            item_subcategory.name as subcategory, 
            item_housekeeping.*
            from item_location
            left join item_housekeeping on item_location.id = item_housekeeping.location_id
            left join item_category on item_category.id = item_housekeeping.category_id
            left join item_subcategory on item_subcategory.id = item_housekeeping.subcategory_id
            where item_housekeeping.id is not null
        ");
        return view('housekeeping.index', ['housekeeping' => $housekeeping]);
    }

    public function add() {
        return view('housekeeping.add');
    }

    public function edit(Housekeeping $housekeeping) {
        return view('housekeeping.edit', ['housekeeping' => $housekeeping]);
    }
}
