<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class BaseMigration extends Migration
{

  /**
   * @var string
   */
  protected $table;

  /**
   * @return string
   *
   * @throws Exception
   */
  public function getTable()
  {
    if ($this->table == null) {
      throw new Exception("Table not set.");
    }

    return $this->table;
  }

  /**
   * @param Blueprint $table
   *
   * @return $this
   */
  public function setTable(Blueprint $table)
  {
    $this->table = $table;

    return $this;
  }

  /**
   * @param string $type
   * @param string $key
   *
   * @return $this
   */
  public function addNullable($type, $key)
  {
    $types = [
      "boolean",
      "dateTime",
      "integer",
      "string",
      "text"
    ];

    if (in_array($type, $types)) {
      $this->getTable()->{$type}($key)->nullable()->default(null);
    }

    return $this;
  }

  /**
   * @return $this
   */
  public function addTimestamps()
  {
    $this->getTable()->timestamps();
    $this->getTable()->softDeletes();

    return $this;
  }

  /**
   * @return $this
   */
  public function addPrimary()
  {
    $this->getTable()->increments("id");

    return $this;
  }

  /**
   * @param string $key
   *
   * @return $this
   */
  public function addForeign($key)
  {
    $this->addNullable("integer", $key);
    $this->getTable()->index($key);

    return $this;
  }

  /**
   * @param string $key
   *
   * @return $this
   */
  public function addBoolean($key)
  {
    return $this->addNullable("boolean", $key);
  }

  /**
   * @param string $key
   *
   * @return $this
   */
  public function addDateTime($key)
  {
    return $this->addNullable("dateTime", $key);
  }

  /**
   * @param string $key
   *
   * @return $this
   */
  public function addInteger($key)
  {
    return $this->addNullable("integer", $key);
  }

  /**
   * @param string $key
   *
   * @return $this
   */
  public function addString($key)
  {
    return $this->addNullable("string", $key);
  }

  /**
   * @param string $key
   *
   * @return $this
   */
  public function addText($key)
  {
    return $this->addNullable("text", $key);
  }
}
