<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plan_tasks', function(Blueprint $table) {
			$table->increments('id');
			$table->string('start_date');
			$table->string('end_date');
			$table->string('content');
			$table->string('type');
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
		Schema::drop('plan_tasks');
	}

}
