<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExecutingProcurementBebanBahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('executing_procurement_beban_bahans', function (Blueprint $table) {
            $table->id();
            $table->string('name_project');
            $table->string('procurement');
            $table->string('vendor');
            $table->string('description_service');
            $table->integer('volume');
            $table->string('units');
            $table->string('total');
            $table->date('start_toOrder');
            $table->date('finish_toOrder');
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
        Schema::dropIfExists('executing_procurement_beban_bahans');
    }
}
