<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Eloquent implements UserInterface, RemindableInterface
{
  use UserTrait;
  use SoftDeletingTrait;
  use RemindableTrait;

  /**
   * @var string
   */
  protected $table = "user";

  /**
   * @var array
   */
  protected $hidden = ["password"];

  /**
   * @var array
   */
  protected $dates = ["deleted_at"];

  /**
   * @return mixed
   */
  public function getAuthIdentifier()
  {
    return $this->getKey();
  }

  /**
   * @return string
   */
  public function getAuthPassword()
  {
    return $this->password;
  }

  /**
   * @return string
   */
  public function getRememberToken()
  {
    return $this->remember_token;
  }

  /**
   * @param string $value
   *
   * @return void
   */
  public function setRememberToken($value)
  {
    $this->remember_token = $value;
  }

  /**
   * @return string
   */
  public function getRememberTokenName()
  {
    return "remember_token";
  }

  /**
   * @return string
   */
  public function getReminderEmail()
  {
    return $this->email;
  }

  /**
   * @var array
   */
  public static $rules = [
    "username" => "required",
    "password" => "required"
  ];

  /**
   * @return BelongsToMany
   */
  public function groups()
  {
    return $this->belongsToMany("Group")->withTimestamps();
  }
}
