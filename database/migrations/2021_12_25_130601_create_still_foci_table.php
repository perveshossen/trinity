<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStillFociTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('still_foci', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->string('btn_1');
            $table->string('btn_2');
            $table->string('btn_3');
            $table->string('bg');
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
        Schema::dropIfExists('still_foci');
    }
}
