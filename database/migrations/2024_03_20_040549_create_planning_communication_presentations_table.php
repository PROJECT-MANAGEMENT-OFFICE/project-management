<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanningCommunicationPresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planning_communication_presentations', function (Blueprint $table) {
            $table->id();
            $table->string('deliverable');
            $table->string('description');
            $table->string('delivery_method');
            $table->string('frequency');
            $table->string('owner');
            $table->string('audience');
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
        Schema::dropIfExists('planning_communication_presentations');
    }
}
