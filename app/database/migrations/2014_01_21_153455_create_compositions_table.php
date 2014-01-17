<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompositionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('compositions', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('exam_id');
			$table->string('title');
			$table->text('content');
			$table->string('note');
			$table->integer('teacher_id');
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
		Schema::drop('compositions');
	}

}
