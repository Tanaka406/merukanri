<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZaikoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zaiko', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('syohin_name');
            $table->string('jyotai'); 
            $table->integer('shuppin_date'); 
            $table->string('biko'); 
            $table->integer('soryo'); 
            $table->integer('tesuryo'); 
            $table->integer('jyunrieki')->nullable();
            $table->integer('user_id'); 
            $table->string('del_flg'); 
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
        Schema::dropIfExists('zaiko');
    }
}
