<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubreturnlistDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subreturnlist_details', function (Blueprint $table) {
            $table->unsignedinteger('subreturnlists_id');
            $table->string('item_name')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('price')->nullable();
            $table->integer('amount')->nullable();
            $table->timestamps();
            $table->foreign('subreturnlists_id')->references('id')->on('subreturnlists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subreturnlist_details');
    }
}
