<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiiredtlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siiredtl', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('siire_value');
            $table->integer('siire_place'); 
            $table->integer('siire_date'); 
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
        Schema::dropIfExists('siiredtl');
    }
}
