<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 7/11/2018
 * Time: 12:10 AM
 */

namespace App\Controllers;


class Pages{
   public function home(){
       view('index');
}
    public function contact(){
       view('contact');
    }
    public function about(){
       view('about');
    }
}