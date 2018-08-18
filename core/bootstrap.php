<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 7/10/2018
 * Time: 10:37 PM
 */

use App\Core\App;

App::bind('config',require 'config.php');
App::bind('db',new QueryBuilder(
        DbConnection::make(App::get('config')['database'])
));


 function view($path,$params=[]){
    if($params)
        extract($params);
    return require "views/{$path}.view.php";
}
function redir($url){
     header("Location:{$url}");
}