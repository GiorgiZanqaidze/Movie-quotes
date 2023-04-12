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
		User::create(['name' => $this->argument('name'), 'email' =>$this->argument('email'), 'password' =>bcrypt($this->argument('password'))]);
	}
}
