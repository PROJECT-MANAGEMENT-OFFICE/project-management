<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExecutingCostBebanBahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('executing_cost_beban_bahans', function (Blueprint $table) {
            $table->id();
            $table->string('procurement');
            $table->string('vendor');
            $table->string('material');
            $table->string('description');
            $table->integer('volume');
            $table->string('unit');
            $table->string('total');
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
        Schema::dropIfExists('executing_cost_beban_bahans');
    }
}
