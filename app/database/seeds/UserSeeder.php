<?php

class UserSeeder extends DatabaseSeeder
{
  /**
   * @return void
   */
  public function run()
  {
    User::truncate();
    
    $users = [
      [
        "username" => "Nicole",
        "password" => Hash::make("V3lv3tk1ss3s"),
        "email"    => "cerberus478@gmail.com"
      ]
    ];

    foreach ($users as $user) {
      User::create($user);
    }
  }
}
