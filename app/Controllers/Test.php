<?php

namespace App\Controllers;
use \CodeIgniter\View\Table;

class Test extends BaseController
{
    public function index()
    {
        $parser = \Config\Services::parser();
        $data = [
            'izenburua' => "Eunon!",
            'heading' => "Ze yok?",
            'blog' => [
                ['title' => 'Title 1', 'body' => 'Body 1'],
                ['title' => 'Title 2', 'body' => 'Body 2'],
                ['title' => 'Title 3', 'body' => 'Body 3'],
                ['title' => 'Title 4', 'body' => 'Body 4'],
                ['title' => 'Title 5', 'body' => 'Body 5'],
            ],
        ];
       // echo view ("main_view", $data);
       return $parser-> setData($data)->render ("main_view");
    }
}
