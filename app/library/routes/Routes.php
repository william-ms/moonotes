<?php

namespace app\library\routes;

class Routes
{
  protected static array $routes = [];

  public static function add_route($uri, $route)
  {
    self::$routes[$route->type][$uri] = $route;
  }

  public static function get_routes()
  {
    $requestMethod = $_SERVER['REQUEST_METHOD'];

    return self::$routes[strtolower($requestMethod)];
  }
}
