<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecievelistDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recievelist_details', function (Blueprint $table) {
            $table->unsignedinteger('recievelist_id');
            $table->unsignedinteger('book_id');
            $table->integer('quantity')->nullable();
            $table->timestamps();
            $table->foreign('recievelist_id')->references('id')->on('recievelists');
            $table->foreign('book_id')->references('id')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recievelist_details');
    }
}
