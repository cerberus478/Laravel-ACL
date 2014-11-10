<?php

class UserSeeder extends DatabaseSeeder{

	public function run(){
		$users = [
			[
				"username" => "Nicole",
				"password" => Hash::make("V3lv3tk1ss3s"),
				"email" => "cerberus478@gmail.com"
			]
		];

		foreach($users as $user){
			User::create($user);
		}
	}
}