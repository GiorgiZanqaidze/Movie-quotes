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
	protected $signature = 'app:generate-user {name} {email} {password}';

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
		// $user = new User();
		// $user->name = $this->argument('name');
		// $user->email = $this->argument('email');
		// $user->password = bcrypt($this->argument('password'));
		// $user->save();
		// echo $this->argument('name');

		User::create(['name' => $this->argument('name'), 'email' =>$this->argument('email'), 'password' =>bcrypt($this->argument('password'))]);
	}
}
