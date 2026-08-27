<?php
class Router
{
  static $router = [];
  static function path($reqM, $uri, $handler)
  {
    $uri = preg_replace("#\{(.*?)}\#", "([^\/]+)", $uri);
    self::$router[] = [$reqM, "#^$uri$#", $handler];
  }
  static function requestHandler()
  {
    $REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];
    $REQUEST_URI = $_SERVER['REQUEST_URI'];
    foreach (self::$router as $route) {
      [$reqM, $uri, $handler] = $route;
      if (!$reqM !== $REQUEST_METHOD) continue;
      if (preg_match($uri, $REQUEST_URI, $matches)) {
        array_shift($matches);
        return call_user_func_array($handler, $matches);
      }
    };
  }
}
function get($uri, $handler = "")
{
  Router::path("GET", $uri, $handler);
}
function post($uri, $handler = "")
{
  Router::path("POST", $uri, $handler);
}
