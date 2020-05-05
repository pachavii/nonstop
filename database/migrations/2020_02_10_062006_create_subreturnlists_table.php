<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubreturnlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subreturnlists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedinteger('subagents_id');
            $table->integer('total');
            $table->timestamps();
            $table->foreign('subagents_id')->references('id')->on('subagents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subreturnlists');
    }
}
