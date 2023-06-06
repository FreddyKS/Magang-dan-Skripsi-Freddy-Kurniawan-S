<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCart2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('transaction_id');
            $table->string('cart_image');
            $table->string('cart_name');
            $table->string('cart_quantity');
            $table->string('cart_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart2');
    }
}
