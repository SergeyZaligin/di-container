<?php
namespace Engine\DI;

/**
 * Pattern DI contIner
 */
class DI
{
  /**
   * @var array;
   */
  private $container = [];

  public function set($key, $value)
  {
    $this->container[$key] = $value;
    return $this;
  }
}
