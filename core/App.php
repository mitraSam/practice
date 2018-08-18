<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 7/10/2018
 * Time: 10:11 PM
 */

namespace App\Core;

class App{
    private static $props = [];
    public  static function get($prop){

        if(!array_key_exists($prop, static::$props)){
            throw new \Exception('prop not init');
        }
        return static::$props[$prop];
    }
    public static function bind($key,$value){
        static::$props[$key]=$value;
    }
}

