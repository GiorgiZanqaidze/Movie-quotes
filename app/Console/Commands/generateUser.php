<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class generateUser extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'app:generate-user';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create User';

	/**
	 * Execute the console command.
	 */
	public function handle(): void
	{
		$user = new User();
		$user->name = 'gio';
		$user->email = 'gio@gmail.com';
		$user->password = bcrypt('gio123');
		$user->save();
	}
}
