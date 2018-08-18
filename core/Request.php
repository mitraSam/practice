<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 7/11/2018
 * Time: 12:14 AM
 */

namespace App\Core;

class Request{
  public static function getUrl(){
      return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),'/');
  }



  public static function getType(){
      return $_SERVER['REQUEST_METHOD'];
  }
}