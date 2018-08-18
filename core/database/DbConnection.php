<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 7/10/2018
 * Time: 9:45 PM
 */


class DbConnection{
    public static function make($config){
        try{
        return new PDO(
            $config["connection"]
            .";{$config['db']}",
            $config['user'],
            $config['password']
        );
    }catch (Exception $e){
            die($e->getMessage());
        }
    }
}