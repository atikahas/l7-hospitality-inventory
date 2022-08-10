<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class SubCategory extends Model
{
    use SoftDeletes;
    protected $table = 'item_subcategory';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function Category() {
        $catgory = DB::connection('l7_invntory')->table('item_category')->where('id', $this->id)->first();
        return $catgory->catgory;
    }
}
