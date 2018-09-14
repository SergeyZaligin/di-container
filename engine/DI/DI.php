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

  /**
   * Set
   * @param type @string $key
   * @param type @string $value
   * @return \Engine\DI\DI
   */
  public function set(string $key, array $value): DI
  {
    $this->container[$key] = $value;
    return $this;
  }
  
  /**
   * Get
   * @param type @string $key
   * @return @string
   */
  public function get(string $key): array
  {
    return $this->hasKey($key);
  }
  
  /**
   * 
   * @param type @string $key
   * @return string
   */
  private function hasKey(string $key): array
  {
    return $this->container[$key] ?? null;
  }
}
