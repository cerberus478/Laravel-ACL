<?php

class ResourceSeeder extends DatabaseSeeder
{
  /**
   * @return void
   */
  public function run()
  {
    Resource::truncate();

    $resources = [
      [
        "pattern" => "/",
        "name"    => "user/login",
        "target"  => "UserController@login",
        "secure"  => false
      ],

      [
        "pattern" => "/request",
        "name"    => "user/request",
        "target"  => "UserController@request",
        "secure"  => false
      ],

      [
        "pattern" => "/reset",
        "name"    => "user/reset",
        "target"  => "UserController@reset",
        "secure"  => false
      ],

      [
        "pattern" => "/logout",
        "name"    => "user/logout",
        "target"  => "UserController@logout",
        "secure"  => true
      ],

      [
        "pattern" => "/profile",
        "name"    => "user/profile",
        "target"  => "UserController@profile",
        "secure"  => true
      ],

      [
        "pattern" => "/group/index",
        "name"    => "group/index",
        "target"  => "GroupController@index",
        "secure"  => true
      ],

      [
        "pattern" => "/group/add",
        "name"    => "group/add",
        "target"  => "GroupController@add",
        "secure"  => true
      ],

      [
        "pattern" => "/group/edit",
        "name"    => "group/edit",
        "target"  => "GroupController@edit",
        "secure"  => true
      ],

      [
        "pattern" => "/group/delete",
        "name"    => "group/delete",
        "target"  => "GroupController@delete",
        "secure"  => true
      ]
    ];

    foreach ($resources as $resource) {
      Resource::create($resource);
    }
  }
}
