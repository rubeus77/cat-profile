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
		//wstawianie danych z pliku "BreedsTableSeeder.php - to dane początkowe
		$this->call('BreedsTableSeeder');
	}

}
