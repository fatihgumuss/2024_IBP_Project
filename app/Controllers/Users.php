<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Users extends Controller
{
    public function __construct()
    {
        helper(['form']);
    }

    public function create()
    {
        echo view('admin/users/create');
    }

    public function store()
    {
        $model = new UserModel();
        $data = [
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role_id' => $this->request->getVar('role_id')
        ];
        $model->insert($data);
        return redirect()->to('admin/dashboard');
    }
    public function edit($id)
    {
        $model = new UserModel();
        $user = $model->find($id);

        if (!$user) {
            return redirect()->to('admin/dashboard');
        }

        $data['user'] = $user;
        echo view('admin/users/edit', $data);
    }



    public function update()
    {
        $model = new UserModel();
        $id = $this->request->getVar('id');
        $data = [
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role_id' => $this->request->getVar('role_id')
        ];
        $model->update($id, $data);
        return redirect()->to('admin/dashboard');
    }

    public function delete($id)
    {
        $model = new UserModel();
        $model->delete($id);

        return redirect()->to('admin/dashboard');
    }

}
