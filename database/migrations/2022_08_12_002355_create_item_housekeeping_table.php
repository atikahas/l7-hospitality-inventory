<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemHousekeepingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_housekeeping', function (Blueprint $table) {
            $table->id();
            $table->integer('location_id')->nullable();
            $table->integer('sublocation_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('subcategory_id')->nullable();
            $table->string('item_name')->nullable();
            $table->string('item_description')->nullable();
            $table->string('item_image');
            $table->date('purchase_date')->nullable();
            $table->integer('purchase_price');
            $table->string('purchase_location');
            $table->string('purchase_link');
            $table->integer('initial_stock')->nullable();
            $table->integer('current_stock')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_housekeeping');
    }
}
