<?php

class DatabaseSeeder extends Seeder
{
  /**
   * @return void
   */
  public function run()
  {
    Eloquent::unguard();

    $this->call("UserSeeder");
    $this->call("ResourceSeeder");
    $this->call("GroupSeeder");
  }
}
