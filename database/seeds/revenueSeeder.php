<?php
/**
 * Created by PhpStorm.
 * User: nicholasfletcher
 * Date: 6/11/2016
 * Time: 2:35 PM
 */
 
use Illuminate\Database\Seeder;
 
class RevenueSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('revenue')->delete();

		$revenue = array(
			['id' => 1, 'name' => 'Revenue 1', 'slug' => 'project-1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 2, 'name' => 'Revenue 2', 'slug' => 'project-2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 3, 'name' => 'Revenue 3', 'slug' => 'project-3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		);

		// Uncomment the below to run the seeder
		DB::table('revenue')->insert($revenue);
	}

}