<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemBuyinghousekeepingHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_buyinghousekeeping_history', function (Blueprint $table) {
            $table->id();
            $table->integer('item_houskeeping_id')->nullable();
            $table->string('detail')->nullable();
            $table->string('shopname')->nullable();
            $table->string('image');
            $table->integer('buying_price')->nullable();
            $table->date('buying_date')->nullable();
            $table->integer('quantity')->nullable();
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
        Schema::dropIfExists('item_buyinghousekeeping_history');
    }
}
