<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		// Schema::create('answers', function(Blueprint $table) {
		// 	$table->increments('id');
		// 	$table->integer('id');
		// 	$table->string('description');
		// 	$table->integer('exercise_id');
		// 	$table->timestamps();
		// });

	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('answers');
	}

}
