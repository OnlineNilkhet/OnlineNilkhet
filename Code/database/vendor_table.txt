<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTb1VendorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb1_vendor', function (Blueprint $table) {
              $table->increments('vendor_id');
            $table->string('vendor_email');
            $table->string('vendor_password');
            $table->string('vendor_name');
            $table->string('vendor_phone');
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
        Schema::dropIfExists('tb1_vendor');
    }
}
