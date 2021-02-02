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
        // $users = $userModel->find([1,3]);
        // $users = $userModel->findAll();
        // $users = $userModel->where('name','moises')->findAll();
        // $users = $userModel->findAll(3,1);
        // $users = $userModel->onlyDeleted()->findAll();
        $data = [
            "id"=> "11",
            'name'=>'developer11',
            'email'=>'developer11@test.com'
        ];

        // $userModel->insert($data);

        // $userModel->update([8,9], $data);

        // $userModel->whereIn('id',[1,2])->set(['name'=>'me'])->update();
        $userModel->save($data);

        $users = $userModel->findAll();

        $users = array('users'=>$users);
        // var_dump($users);
        return view('structure/header').view('structure/body', $users);
    }
    
}
