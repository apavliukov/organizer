<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('events')->delete();

		$events = array(
			['id' => 1, 'name' => 'Event 1', 'slug' => 'event-1', 'dateTime' => date('Y-m-d H:i:s', strtotime("+1 day")), 'description' => 'Description 1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 2, 'name' => 'Event 2', 'slug' => 'event-2', 'dateTime' => date('Y-m-d H:i:s', strtotime("+7 days")), 'description' => 'Description 2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 3, 'name' => 'Event 3', 'slug' => 'event-3', 'dateTime' => date('Y-m-d H:i:s', strtotime("+20 days")), 'description' => 'Description 3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		);

		// Uncomment the below to run the seeder
		DB::table('events')->insert($events);
	}

}