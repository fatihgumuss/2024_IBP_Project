<?php
namespace App\Controllers;

use App\Models\AnnouncementsModel;
use App\Models\BookModel;
use App\Models\MessageModel;

class UserDashboard extends BaseController
{
    public function index()
    {
        $announcementModel = new AnnouncementsModel();
        $messageModel = new MessageModel();

        $data = [
            'announcements' => $announcementModel->findAll(),
            'messages' => $messageModel->where('receiver_id', session()->get('id'))->findAll(),
        ];

        return view('users/dashboard', $data);
    }
    public function books()
    {
        $bookModel = new BookModel();
        $data['books'] = $bookModel->findAll();
        return view('users/books', $data);
    }

    public function messages()
    {
        $messageModel = new MessageModel();
        $data['messages'] = $messageModel->where('recipient_id', session()->get('id'))->findAll();
        return view('users/messages', $data);
    }
}
