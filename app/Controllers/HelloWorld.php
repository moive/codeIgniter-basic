<?php namespace App\Controllers;

use App\Models\UserModel;
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
        $userModel = new UserModel($db);
		$user = $userModel->find('1');
		var_dump($user);
        return view('structure/header').view('structure/body', $user);
    }
    
}
