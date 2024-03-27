<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExecutingCostBebanSubkonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('executing_cost_beban_subkons', function (Blueprint $table) {
            $table->id();
            $table->string('name_project');
            $table->string('procurement_subkon');
            $table->string('vendor_subkon');
            $table->string('description_service_subkon');
            $table->integer('volume_subkon');
            $table->string('units_subkon');
            $table->string('total_subkon');
            $table->date('start_toOrder_subkon');
            $table->date('finish_toOrder_subkon');
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
        Schema::dropIfExists('executing_cost_beban_subkons');
    }
}
