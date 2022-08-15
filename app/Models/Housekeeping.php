<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Housekeeping extends Model
{
    protected $table = 'item_housekeeping';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function Location() {
        $location = DB::connection('ar_inventory')->table('item_location')->where('id', $this->location_id)->first();
        return $location->name;
    }

    public function SubLocation() {
        $sublocation = DB::connection('ar_inventory')->table('item_sublocation')->where(['location_id' => $this->location_id,'id' => $this->sublocation_id])->first();
        return $sublocation->name;
    }

    public function Category() {
        $category = DB::connection('ar_inventory')->table('item_category')->where('id', $this->category_id)->first();
        return $category->name;
    }

    public function SubCategory() {
        $subcategory = DB::connection('ar_inventory')->table('item_subcategory')->where(['category_id' => $this->category_id,'id' => $this->subcategory_id])->first();
        return $subcategory->name;
    }
}
