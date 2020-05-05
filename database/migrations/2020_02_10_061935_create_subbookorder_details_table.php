<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubbookorderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subbookorder_details', function (Blueprint $table) {
            $table->unsignedinteger('subbookorder_id');
            $table->unsignedinteger('book_id');
            $table->integer('quantity')->nullable();
            $table->timestamps();
            $table->foreign('subbookorder_id')->references('id')->on('subbookorders');
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
        Schema::dropIfExists('subbookorder_details');
    }
}
