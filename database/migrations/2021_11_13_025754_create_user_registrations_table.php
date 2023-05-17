<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('current_month');
            $table->string('user_id');
            $table->string('user_mobile');
            $table->string('user_name');
            $table->string('email')->nullable();
            $table->string('card_name');
            $table->string('card_number')->unique();
            $table->string('card_ammount');
            $table->string('limit');
            $table->string('expire_date');
            $table->string('status');
            $table->string('store_name')->nullable();
            $table->string('address');
            $table->string('photo');
            $table->SoftDeletes();
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
        Schema::dropIfExists('user_registrations');
    }
}
