<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		\App\Models\User::factory()->create([
			'name'     => 'gio',
			'email'    => 'gio@gmail.com',
			'password' => bcrypt('gio123123'),
		]);

		\App\Models\Movie::factory(5)->create();

		\App\Models\Quote::factory(10)->create();
	}
}
