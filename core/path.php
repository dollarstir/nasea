<?php

class Path {
    static function root($path = "") {
        $path = ltrim($path, "/");
        return __DIR__ . "/../$path";
    }

    static function rebase($path = "") {
        if(strpos($path, 'http') || strpos($path, 'www.')) {
            return $path;
        }
        
        $root = explode("/core", __DIR__)[0];
        $root = array_reverse(explode("/", $root))[0];

        $uri = $_SERVER['REQUEST_URI'];
        
        if(!preg_match("/^\/?$root/", $uri)) {
            return "/$path";
        }
        
        return "/$root/$path";
    }
}