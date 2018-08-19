<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTb1BooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb1_books', function (Blueprint $table) {
            $table->increments('book_id');
            $table->string('book_name');
            $table->integer('category_id');
            $table->integer('vendor_id');
            $table->longText('book_short_description');
            $table->longText('book_long_description');
            $table->float('book_price');
            $table->string('book_image');
            $table->string('book_size');
            $table->string('book_color');
            $table->integer('publication_status');

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
        Schema::dropIfExists('tb1_books');
    }
}
