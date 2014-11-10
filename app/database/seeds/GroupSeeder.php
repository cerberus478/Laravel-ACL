<?php

class GroupSeeder extends DatabaseSeeder
{
  /**
   * @return void
   */
  public function run()
  {
    Group::truncate();

    $group = Group::create([
      "name" => "default"
    ]);

    // get and attach all users to default group

    $users = User::get();

    $group->users()->sync($users->lists("id"));

    // get and attach all resources to default group

    $resources = Resource::get();

    $group->resources()->sync($resources->lists("id"));
  }
}
