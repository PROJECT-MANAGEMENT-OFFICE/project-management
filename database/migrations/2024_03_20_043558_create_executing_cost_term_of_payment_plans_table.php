<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExecutingCostTermOfPaymentPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('executing_cost_term_of_payment_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name_project');
            $table->string('term_type');
            $table->string('value_term');
            $table->string('value_rp_term');
            $table->string('month_plan');
            $table->string('guarantee');
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
        Schema::dropIfExists('executing_cost_term_of_payment_plans');
    }
}
