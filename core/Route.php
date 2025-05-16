<?php
class Route 
{
    public static function __callStatic($name, $arguments) {
        if (strtoupper($name) != strtoupper($_SERVER['REQUEST_METHOD'])) return;
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        
        $url = $arguments[0];
        if ($url != $path) return;

        [$class, $method] = $arguments[1];
        $class = new $class;
        $class->$method();
    }
}