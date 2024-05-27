<?php

namespace App\Controllers;

use App\Models\MessageModel;
use CodeIgniter\Controller;

class UserMessages extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('users/messages');
    }

    public function store()
    {
        $session = session();
        $model = new MessageModel();

        $data = [
            'sender_id' => $session->get('id'),
            'message' => $this->request->getVar('message'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $model->save($data);
        $session->setFlashdata('msg', 'Message sent successfully');
        return redirect()->to('/user/messages');
    }
}
