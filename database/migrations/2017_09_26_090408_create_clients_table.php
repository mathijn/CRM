<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');

            $table->string('first_name');
            $table->string('last_name')->nullable();
			$table->string('email')->nullable();
			$table->string('phone')->nullable();

			$table->unsignedInteger('event_id')->nullable();
			$table->string('company')->nullable();
			$table->unsignedInteger('category_id')->nullable();

            $table->timestamps();

			$table->foreign('company_id')->references('id')->on('companies');
			$table->foreign('category_id')->references('id')->on('categories');
			$table->foreign('event_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
