<?php

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Group extends Eloquent
{
  use SoftDeletingTrait;

  /**
   * @var string
   */
  protected $table = "group";

  /**
   * @var array
   */
  protected $dates = ["deleted_at"];

  /**
   * @var array
   */
  protected $guarded = [
    "id",
    "created_at",
    "updated_at",
    "deleted_at"
  ];

  /**
   * @return BelongsToMany
   */
  public function resources()
  {
    return $this->belongsToMany("Resource")->withTimestamps();
  }

  /**
   * @return BelongsToMany
   */
  public function users()
  {
    return $this->belongsToMany("User")->withTimestamps();
  }
}
