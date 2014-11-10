<?php

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Resource extends Eloquent
{
  use SoftDeletingTrait;

  /**
   * @var string
   */
  protected $table = "resource";

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
  public function groups()
  {
    return $this->belongsToMany("Group")->withTimestamps();
  }
}
