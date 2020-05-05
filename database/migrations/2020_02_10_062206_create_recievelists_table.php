<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecievelistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recievelists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedinteger('subagent_id');
            $table->unsignedinteger('member_id');
            $table->timestamps();
            $table->foreign('subagent_id')->references('id')->on('subagents');
            $table->foreign('member_id')->references('id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recievelists');
    }
}
