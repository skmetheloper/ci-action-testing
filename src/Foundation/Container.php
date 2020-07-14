<?php

namespace Ethereal\Foundation;

use RuntimeException;

class Container
{
  private static $instance;
  
  protected $instances = [];
  
  protected $bindings  = [];
  
  public function has($id)
  {
    return array_key_exists($id, $this->instances);
  }
  
  public function get($id)
  {
    if (! $this->has($id)) {
      throw new RuntimeException(
        "Undefined key: {$id} in the container"
      );
    }
    return $this->instances[$id];
  }
  
  public function instance($id, $instancs)
  {
    $this->instances[$id] = $instance;
  }
  
  public static function setInstance(Application $app)
  {
    self::$instance = $app;
  }
  
  public static function getInstance(): Application
  {
    return self::$instance;
  }
}