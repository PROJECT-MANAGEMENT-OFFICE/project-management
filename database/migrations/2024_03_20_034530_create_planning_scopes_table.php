<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanningScopesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planning_scopes', function (Blueprint $table) {
            $table->id();
            $table->string('name_project');
            $table->string('technical_requirements');
            $table->string('perfomance_requirements');
            $table->string('bussines_requirements');
            $table->string('regulatory_requirements');
            $table->string('user_requirements');
            $table->string('system_requirements');
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
        Schema::dropIfExists('planning_scopes');
    }
}
