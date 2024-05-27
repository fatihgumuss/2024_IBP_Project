<?php
namespace App\Controllers;

use App\Models\UserModel;
use App\Models\BookModel;
use App\Models\AnnouncementsModel;
use App\Models\MessageModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $bookModel = new BookModel();
        $announcementModel = new AnnouncementsModel();
        $messageModel = new MessageModel();

        $data = [
            'users' => $userModel->findAll(),
            'books' => $bookModel->findAll(),
            'announcements' => $announcementModel->findAll(),
            'messages' => $messageModel->findAll(),
        ];

        return view('admin/dashboard', $data);
    }
}
