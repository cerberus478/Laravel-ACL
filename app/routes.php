<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(["before" => "guest"], function () {
  $resources = Resource::where("secure", "=", false)->get();

  foreach ($resources as $resource) {
    Route::any($resource->pattern, [
      "as"   => $resource->name,
      "uses" => $resource->target
    ]);
  }
});

Route::group(["before" => "auth"], function () {
  $resources = Resource::where("secure", "=", true)->get();

  foreach ($resources as $resource) {
    Route::any($resource->pattern, [
      "as"   => $resource->name,
      "uses" => $resource->target
    ]);
  }
});
