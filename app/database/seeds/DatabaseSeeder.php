<?php

class DatabaseSeeder extends Seeder {
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		//wstawianie danych z pliku "BreedsTableSeeder.php - to dane początkowe
		$this->call(BreedsTableSeeder::class);
	}
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */


}
