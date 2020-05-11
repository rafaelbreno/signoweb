<?php


namespace App\Controllers;

use App\Models\Client;
use SW\Controller\Controller;
use SW\Model\Container;

class CRUDController extends Controller
{

    public function index()
    {
        $client = Container::getModel('Client');

        $this->view->data = $client->getClients();

        $this->render("index");
    }

    public function create()
    {
        $this->view->data = [];
        $this->render("create");
    }

    public function store()
    {
        $client = Container::getModel('Client');

        $client->setName($_POST['name']);
        $client->setEmail($_POST['email']);
        $client->setTelephone($_POST['telephone']);
        $client->setBirthday($_POST['birthday']);
        $client->setAddress($_POST['address']);

        $client->store();

    }

    public function update()
    {
        echo "CRUDController@update";
    }

    public function delete()
    {
        $client = Container::getModel('Client');

        $client->setId($_POST['id']);

        $client->delete();
    }

}