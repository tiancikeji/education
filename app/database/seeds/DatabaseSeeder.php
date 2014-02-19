<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('TweetsTableSeeder');
		$this->call('TopicsTableSeeder');
		$this->call('VideosTableSeeder');
		$this->call('PapersTableSeeder');
		$this->call('ExercisesTableSeeder');
		$this->call('AnswersTableSeeder');
		$this->call('NewsTableSeeder');
		$this->call('MessagesTableSeeder');
		$this->call('MywordsTableSeeder');
		$this->call('WordsTableSeeder');
		$this->call('CommentsTableSeeder');
		$this->call('TeachersTableSeeder');
		$this->call('PlansTableSeeder');
		$this->call('Plan_tasksTableSeeder');
		$this->call('PaymentsTableSeeder');
		$this->call('ExamsTableSeeder');
		$this->call('HomeworksTableSeeder');
		$this->call('UserplansTableSeeder');
		$this->call('ReportsTableSeeder');
		$this->call('CompositionsTableSeeder');
		$this->call('UserteachersTableSeeder');
		$this->call('PermissionsTableSeeder');
		$this->call('AdminpermissionsTableSeeder');
	}

}
