<?php
class Router
{
  static $router = [];
  static function path($reqM, $uri, $handler)
  {
    $uri = preg_replace("#\{(.*?)\}#", "([^\/]+)", $uri);
    self::$router[] = [$reqM, "#^$uri$#", $handler];
  }
  static function reqHandler()
  {
    $REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];
    $REQUEST_URI = $_SERVER['REQUEST_URI'];
    foreach (self::$router as $route) {
      [$reqM, $uri, $handler] = $route;
      if ($reqM !== $REQUEST_METHOD) continue;
      if (preg_match($uri, $REQUEST_URI, $mathces)) {
        array_shift($mathces);
        return call_user_func_array($handler, $mathces);
      }
    }
    move('/');
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
