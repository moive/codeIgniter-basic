<?php namespace App\Controllers;

class HelloWorld extends BaseController
{
    public function index(){
        return view('view_hello_world');
    }

    public function test(){
        $data['value1'] = "value 1";
        $data['value2'] = "value 2";
        $data['value3'] = "value 3";
        return view('view_test', $data);
    }

    public function html(){
        return view('structure/header').view('structure/body');
    }
    
}
