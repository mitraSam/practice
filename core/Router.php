<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 7/10/2018
 * Time: 11:41 PM
 */

namespace App\Core;

class Router{
    private $GET = [];
    private $POST= [];

    public static function init($file){
        $router = new static;
        require $file;
        return $router;
    }
    public function get($url,$route){
        $this->GET[$url] =$route;
    }
    public function post($url,$route){
        $this->POST[$url] =$route;
    }
    public function direct($url, $type){
        if(!array_key_exists($url,$this->$type)){
            throw new \Exception("invalid url {$url}");
        }
      $route = $this->$type[$url];

        $this->action(...explode("@",$route));
    }
    public function action($class,$method){
            $namespace  = "App\\Controllers\\{$class}";
            $instance= new $namespace;
            if(!method_exists($instance,$method)){
                throw new \Exception('no such {$method} method on ${$class}');
            }
            $instance->$method();

    }
}