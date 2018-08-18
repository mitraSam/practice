<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 7/11/2018
 * Time: 11:57 AM
 */

namespace App\Controllers;

use App\Core\App;

class Todos{

    public function index(){
        $todos = App::get('db')->getData('todos');
        view('todos', compact('todos'));
    }

    public function insert(){
        App::get('db')->post('todos',$_POST);
        redir("/todos");
    }
}