<?php

namespace App\Controllers;

use App\Models\BookModel;
use CodeIgniter\Controller;

class Books extends Controller
{
    public function index()
    {
        $model = new BookModel();
        $data['books'] = $model->findAll();

        echo view('admin/books/index', $data);
    }
    public function delete($id)
    {
        $model = new BookModel();
        $model->delete($id);

        return redirect()->to('admin/dashboard');
    }
    public function create()
    {
        echo view('admin/books/create');
    }

    public function store()
    {
        $title = $this->request->getPost('title');
        $author = $this->request->getPost('author');
        $isbn = $this->request->getPost('isbn');

        $model = new BookModel();

        $data = [
            'title' => $title,
            'author' => $author,
            'isbn' => $isbn
        ];
        $model->insert($data);

        return redirect()->to('admin/dashboard');
    }


}
