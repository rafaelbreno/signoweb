<?php


namespace App\Controllers;

use SW\Controller\Controller;

class CRUDController extends Controller
{

    public function index()
    {
        $this->view->data = [
            1 => [
                "name" => "Rafael",
                "age" => "20"
            ],
            2 => [
                "name" => "Breno",
                "age" => "21"
            ],
        ];
        $this->render("index");
    }

    public function create()
    {
        $this->view->data = [
            1 => [
                "name" => "Rafael",
                "age" => "20"
            ],
            2 => [
                "name" => "Breno",
                "age" => "21"
            ],
        ];
        $this->render("create");
    }

    public function store()
    {
        echo "CRUDController@store";
    }

    public function update()
    {
        echo "CRUDController@update";
    }

    public function delete()
    {
        echo "CRUDController@delete";
    }

}