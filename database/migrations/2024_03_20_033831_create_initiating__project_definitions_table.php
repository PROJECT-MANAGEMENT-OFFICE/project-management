<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInitiatingProjectDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('initiating__project_definitions', function (Blueprint $table) {
            $table->id();
            $table->string('name_project');
            $table->string('code_project');
            $table->integer('contract_value');
            $table->string('bussines_line');
            $table->date('date');
            $table->string('status');
            $table->string('source_ofFunds');
            $table->string('schema_bussines');
            $table->date('contract_duration');
            $table->date('warranty_period');
            $table->rememberToken();
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
        Schema::dropIfExists('initiating__project_definitions');
    }
}
