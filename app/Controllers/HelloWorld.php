<?php

namespace App\Controllers;

use App\Models\UserModel;

class HelloWorld extends BaseController
{
    public $session = null;
    public function __construct()
    {
        helper('form');
        $this->session = \Config\Services::session();
    }

    public function putData()
    {
        $newdata = [
            'name' => 'Moises',
            'email' => 'moises@test.com',
            'login' => TRUE
        ];

        $this->session->set($newdata);
        echo $this->session->get('email');
    }

    public function readData()
    {
        $br = '<br/>';
        if ($this->session->has('name')) {
            echo 'name: ' . $this->session->get('name') . $br;
            echo 'email: ' . $this->session->get('email') . $br;
            echo 'login ' . $this->session->get('login');
        } else {
            echo 'data not found';
        }
    }

    public function removeEmail()
    {
        $this->session->remove('email');
    }

    public function destroyData()
    {
        $this->session->destroy();
    }

    public function index()
    {
        return view('view_hello_world');
    }

    public function form()
    {
        $structure = view('structure/header') . view('structure/form');
        return $structure;
    }

    public function save()
    {
        $userModel = new UserModel($db);

        $request = \Config\Services::request();

        $data = array(
            'name' => $request->getPostGet('name'),
            'email' => $request->getPostGet('email'),
        );

        $getId = $request->getPostGet('id');

        if ($getId) {
            $data['id'] = $getId;
        }

        if ($userModel->save($data) === false) {
            var_dump($userModel->errors());
        }

        $users = $userModel->findAll();
        $users = array('users' => $users);

        return view('structure/header') . view('structure/body', $users);
    }

    public function edit()
    {
        $userModel = new UserModel($db);
        $request = \Config\Services::request();

        if ($request->getPostGet('id')) {
            $id = $request->getPostGet('id');
        } else {
            $id = $request->uri->getSegment(3); // HelloWorld/edit/:id HelloWorld = 1  edit=2  id=3
        }



        $user = $userModel->find([$id]);
        $user = array('user' => $user);

        $structure = view('structure/header') . view('structure/form', $user);
        // var_dump($user);
        return $structure;
    }
    public function delete()
    {
        $userModel = new UserModel($db);
        $request = \Config\Services::request();

        if ($request->getPostGet('id')) {
            $id = $request->getPostGet('id');
        } else {
            $id = $request->uri->getSegment(3); // HelloWorld/edit/:id HelloWorld = 1  edit=2  id=3
        }

        $userModel->delete($id);

        $users = $userModel->findAll();
        $users = array('users' => $users);

        $structure = view('structure/header') . view('structure/body', $users);
        return $structure;
    }

    public function test()
    {
        $data['value1'] = "value 1";
        $data['value2'] = "value 2";
        $data['value3'] = "value 3";
        return view('view_test', $data);
    }

    public function rotatedImage()
    {
        $info = \Config\Services::image()
            ->withFile('./img/logo-codeigniter.png')
            ->getFile()
            ->getProperties(true);
        $width = $info['width'];
        $height = $info['height'];

        $image = \Config\Services::image()
            ->withFile('./img/logo-codeigniter.png')
            ->reorient()
            // ->rotate(180)
            // ->fit(50, 150, 'bottom-right')
            ->resize($width / 2, $height / 2, true)
            ->save('./img/logo-codeigniter-rotated.png');

        return view('structure/image');
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
            'name' => 'developer14',
            'email' => 'developer14@test.com'
        ];

        // $userModel->insert($data);

        // $userModel->update([8,9], $data);

        // $userModel->whereIn('id',[1,2])->set(['name'=>'me'])->update();
        // $userModel->save($data);

        // $userModel->purgeDeleted();

        // if($userModel->save($data) === false){
        //     var_dump($userModel->errors());
        // }
        // $userModel->save($data);
        $users = $userModel->paginate(3);
        $pager = $userModel->pager;
        $pager->setPath('HelloWorld/html/');

        // var_dump($pager->getTotal());
        // var_dump($pager->getCurrentPage());
        // var_dump($pager->getPageCount());
        // var_dump($pager->getFirstPage());
        // var_dump($pager->getLastPage());
        // var_dump($pager->getPageURI());
        // var_dump($pager->getNextPageURI());
        // var_dump($pager->getPreviousPageURI());
        // var_dump($pager->getDetails()['total']);

        $users = array('users' => $users, 'pager' => $pager);
        return view('structure/header') . view('structure/body', $users);
    }
}
