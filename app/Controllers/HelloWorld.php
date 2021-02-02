<?php namespace App\Controllers;

use App\Models\UserModel;

class HelloWorld extends BaseController
{
    public function __construct()
    {
        helper('form');
    }
    public function index()
    {
        return view('view_hello_world');
    }

    public function form()
    {
        $structure = view('structure/header').view('structure/form');
        return $structure;
    }

    public function save()
    {
        $userModel = new UserModel($db);

        $request = \Config\Services::request();

        $data = array(
            'name'=>$request->getPostGet('name'),
            'email'=>$request->getPostGet('email'),
        );

        $getId = $request->getPostGet('id');

        if ($getId) {
            $data['id'] = $getId;
        }

        if ($userModel->save($data)===false) {
            var_dump($userModel->errors());
        }

        $users=$userModel->findAll();
        $users = array('users'=>$users);

        return view('structure/header').view('structure/body', $users);
    }

    public function edit()
    {
        $userModel = new UserModel($db);
        $request = \Config\Services::request();
        $id = $request->getPostGet('id');

        $user = $userModel->find([$id]);
        $user = array('user' => $user);

        $structure = view('structure/header').view('structure/form', $user);
        // var_dump($user);
        return $structure;
    }
    public function delete()
    {
        $userModel = new UserModel($db);
        $request = \Config\Services::request();
        $id = $request->getPostGet('id');

        $userModel->delete($id);

        $users = $userModel->findAll();
        $users = array('users' => $users);

        $structure = view('structure/header').view('structure/body', $users);
        return $structure;
    }

    public function test()
    {
        $data['value1'] = "value 1";
        $data['value2'] = "value 2";
        $data['value3'] = "value 3";
        return view('view_test', $data);
    }

    public function html()
    {
        $userModel = new UserModel($db);
        // $users = $userModel->find([1,3]);
        // $users = $userModel->findAll();
        // $users = $userModel->where('name','moises')->findAll();
        // $users = $userModel->findAll(3,1);
        // $users = $userModel->onlyDeleted()->findAll();
        $data = [
            'name'=>'developer14',
            'email'=>'developer14@test.com'
        ];

        // $userModel->insert($data);

        // $userModel->update([8,9], $data);

        // $userModel->whereIn('id',[1,2])->set(['name'=>'me'])->update();
        // $userModel->save($data);

        // $userModel->purgeDeleted();
        
        // if($userModel->save($data) === false){
        //     var_dump($userModel->errors());
        // }
        $userModel->save($data);
        $users = $userModel->findAll();

        // var_dump($users);
        
        $users = array('users'=>$users);
        return view('structure/header').view('structure/body', $users);
    }
}
