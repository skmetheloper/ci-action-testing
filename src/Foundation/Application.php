<?php

namespace Ethereal\Foundation;

class Application extends Container
{
  protected $basePath;
  
  public function __construct($basePath)
  {
    $this->useBasePath($basePath);
    $this->makeStatic();
  }
  
  public function useBasePath(string $path)
  {
    $this->basePath = realpath($path) ?: $path;
  }
  
  public function basePath(string $path = '')
  {
    return $this->basePath.($path?DIRECTORY_SEPARATOR.$path:$path);
  }
  
  protected function makeStatic()
  {
    static::setInstance($this);
    $this->instance('app', $this);
  }
}