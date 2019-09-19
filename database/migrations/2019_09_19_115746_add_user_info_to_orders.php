<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserInfoToOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shopper_orders', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->nullable()->change();
            $table->string('user_name');
            $table->string('user_phone');
            $table->string('user_city');
            $table->string('user_district');
            $table->string('user_ward');
            $table->string('user_address');
            $table->string('more_info')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shopper_orders', function (Blueprint $table) {
            //
        });
    }
}
