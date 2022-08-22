<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use DB;
use Auth;
use App\User;
use App\Models\Item;
use App\Models\ItemImage;
use App\Models\Location;
use App\Models\SubLocation;
use App\Models\Category;
use App\Models\SubCategory;

class ItemController extends Controller
{
    public function index() {
        $item = DB::select("
            select 
            item_location.name as location, 
            item_category.name as category, 
            item_subcategory.name as subcategory, 
            ((item_management.`current_stock`/item_management.`initial_stock`)*100) as percentstock,
            item_management.*
            from item_location
            left join item_management on item_location.id = item_management.location_id
            left join item_category on item_category.id = item_management.category_id
            left join item_subcategory on item_subcategory.id = item_management.subcategory_id
            where item_management.id is not null
        ");
        return view('item.index', ['item' => $item]);
    }

    public function add() {
        return view('item.add');
    }

    public function report(Request $request) {
        $filter = $request->except(['page']);
        foreach($filter as $index => $value) {
            if($value == '' || $value == null) {
                unset($filter[$index]);
            }
        }

        $reportitem = new Item();
        $reportitem = $reportitem->where($filter)->orderBy('location_id', 'ASC');
        
        $location = Location::all();
        $sublocation = SubLocation::all();
        $category = Category::all();
        $subcategory = SubCategory::all();

        return view('item.report', [
            'filter' => $filter,
            'reportitem' => $reportitem,
            'location' => $location,
            'sublocation' => $sublocation,
            'category' => $category,
            'subcategory' => $subcategory
        ]);
    }

    public function store(Request $request) {
        try {
            $data = $request->except(['_token']);
            if ($files = $request->file('lampiran')) {
                $destinationPath = 'public/item_image/'; // upload path
                $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profileImage);
                $data['item_image'] = "$profileImage";
                }
            Item::create($data);
            return redirect('item')->with('success', 'New Item Added!');
        } catch(\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }

    public function view(Item $item) {
        return view('item.view', ['item' => $item]);
    }

    public function edit(Item $item) {
        return view('item.edit', ['item' => $item]);
    }

    public function update(Request $request, Item $item, ItemImage $itemimage) {
        try {
            $data = $request->except(['_token']);
            if ($files = $request->file('lampiran')) {
                $destinationPath = 'public/item_image/'; // upload path
                $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profileImage);
                $data['item_image'] = "$profileImage";
                }
            $item->update($data);

            return redirect('item')->with('success', 'Item Updated.');
        } catch(\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }
}
