<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 7/10/2018
 * Time: 11:38 PM
 */

$router->get("","Pages@home");
$router->get("about","Pages@about");
$router->get("contact","Pages@contact");
$router->post("todos",'Todos@insert');
$router->get("todos","Todos@index");