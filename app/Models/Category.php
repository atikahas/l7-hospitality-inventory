<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $table = 'item_category';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function SubCatgeory() {
        return $this->hasMany('App\Models\SubCategory', 'category_id');
    }
}
