<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanningCommunicationTeamMoralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planning_communication_team_morales', function (Blueprint $table) {
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
        Schema::dropIfExists('planning_communication_team_morales');
    }
}
