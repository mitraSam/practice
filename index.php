<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 7/10/2018
 * Time: 9:51 PM
 */

require 'vendor/autoload.php';
require 'core/bootstrap.php';



use App\Core\{Router,Request};

Router::init('routes.php')->direct(Request::getUrl(),Request::getType());

