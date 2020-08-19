<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUriagedtlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uriagedtl', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('uriage_value');
            $table->integer('baikyaku_date'); 
            $table->string('zaiko_id'); 
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
        Schema::dropIfExists('uriagedtl');
    }
}
