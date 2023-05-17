<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
              $table->id();
            $table->string('seller_phone_number');
            $table->string('buyer_phone_number');
            $table->string('title');
            $table->string('card_name');
            $table->string('card_number');
            $table->string('store_name');
            $table->string('store_location');
            $table->string('price')->nullable();
            $table->string('discount')->nullable();
            $table->string('less_discount')->nullable();
            $table->string('discount_price')->nullable();
            $table->string('date');
            $table->integer('role_id');
            $table->string('company_discount')->nullable();
            $table->string('less_ammount_discount')->nullable();
            $table->string('ammount_after_discount')->nullable();
            $table->string('ammount_before_discount')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
