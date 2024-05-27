<?php

namespace App\Controllers;

use App\Models\MessageModel;
use App\Models\UserModel;

class Messages extends BaseController
{
    public function index()
    {
        $messageModel = new MessageModel();
        $data['messages'] = $messageModel->findAll();
        return view('admin/messages/index', $data);
    }

    public function create()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();
        return view('admin/messages/create', $data);
    }

    public function store()
    {
        $messageModel = new MessageModel();
        $data = [
            'sender_id' => session()->get('id'),
            'receiver_id' => $this->request->getPost('receiver_id'),
            'message' => $this->request->getPost('message'),
            'is_read' => 0
        ];
        $messageModel->insert($data);
        return redirect()->to('admin/messages');
    }

    public function read($id)
    {
        $messageModel = new MessageModel();
        $message = $messageModel->find($id);
        if ($message) {
            $messageModel->update($id, ['is_read' => 1]);
            $data['message'] = $message;
            return view('admin/messages/read', $data);
        } else {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Message not found');
        }
    }
}
