<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->increments('id');

			$table->unsignedInteger('employee_id');
			$table->unsignedInteger('company_id');

			$table->string('subject');
			$table->date('period_from');
			$table->date('period_to');
			$table->text('description')->nulable();
			$table->string('experiences')->default('XXXXX');


			$table->timestamps();

			$table->foreign('employee_id')->references('id')->on('employees');
			$table->foreign('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiences');
    }
}
