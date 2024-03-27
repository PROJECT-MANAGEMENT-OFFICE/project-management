<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBebanBahanExecutingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beban_bahan_executings', function (Blueprint $table) {
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
        Schema::dropIfExists('beban_bahan_executings');
    }
}
