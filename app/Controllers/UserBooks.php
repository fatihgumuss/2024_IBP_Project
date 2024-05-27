<?php

namespace App\Controllers;

use App\Models\BookModel;

class UserBooks extends BaseController
{
    public function index()
    {
        $bookModel = new BookModel();
        $data['books'] = $bookModel->findAll();

        return view('users/books', $data);
    }
}
