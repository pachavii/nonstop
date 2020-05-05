<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('init_name')->nullable();
            $table->string('name')->nullable();
            $table->integer('price')->nullable();
            $table->unsignedinteger('booktype_id');
            $table->unsignedinteger('publisher_id');
            $table->timestamps();
            $table->foreign('booktype_id')->references('id')->on('booktypes');
            $table->foreign('publisher_id')->references('id')->on('publishers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
