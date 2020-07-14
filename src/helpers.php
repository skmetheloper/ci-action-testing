<?php

//* helpers.php

if (! function_exists('env')) {
  function env(string $name, $default = null)
  {
      return $_ENV[$name] ?? getenv($name) ?: $default;
  }
}

if (! function_exists('app')) {
  function app(string $accessor = null)
  {
    $app = Ethereal\Foundation\Application::getInstance();
    
    return is_null($accessor) ? $app : $app->get($accessor);
  }
}

if (! function_exists('config')) {
  function config(string $config, $default = null)
  {
    $config = explode('.', $config);
    
    return app('config')->get(...$config) ?: $default;
  }
}

if (! function_exists('redirect')) {
  function redirect(string $path, int $status = null)
  {
    $response = app('response');
    
    return $response->redirect($path, $status ?: 301);
  }
}

if (! function_exists('base_path')) {
  function base_path(string ...$path)
  {
    $path = implode(DIRECTORY_SEPARATOR, $path);
    
    return app()->basePath($path);
  }
}