<?php

namespace App\Controllers;

use App\Models\AnnouncementsModel;
use CodeIgniter\Controller;

class Announcements extends Controller
{
    public function index()
    {
        $model = new AnnouncementsModel();
        $data['announcements'] = $model->findAll();

        echo view('admin/announcements/index', $data);
    }

    public function create()
    {
        echo view('admin/announcements/create');
    }

    public function store()
    {
        $title = $this->request->getPost('title');
        $content = $this->request->getPost('content');

        $model = new AnnouncementsModel();

        $data = [
            'title' => $title,
            'content' => $content
        ];
        $model->insert($data);

        return redirect()->to('admin/dashboard');
    }
    public function edit($id)
    {
        $model = new AnnouncementsModel();
        $data['announcement'] = $model->find($id);

        echo view('admin/announcements/edit', $data);
    }

    public function update($id)
    {
        $title = $this->request->getPost('title');
        $content = $this->request->getPost('content');

        $model = new AnnouncementsModel();

        $data = [
            'title' => $title,
            'content' => $content
        ];
        $model->update($id, $data);

        return redirect()->to('admin/dashboard');
    }

    public function delete($id)
    {
        $model = new AnnouncementsModel();
        $model->delete($id);

        return redirect()->to('admin/dashboard');
    }

}
