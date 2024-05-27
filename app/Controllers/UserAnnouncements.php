<?php

namespace App\Controllers;

use App\Models\AnnouncementsModel;

class UserAnnouncements extends BaseController
{
    public function index()
    {
        $announcementModel = new AnnouncementsModel();
        $data['announcements'] = $announcementModel->findAll();

        return view('users/announcements', $data);
    }
}
