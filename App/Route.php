<?php


namespace App;
use SW\Init\Bootstrap as Bootstrap;

class Route extends Bootstrap
{

    protected function Router()
    {
        /**
         * This is all routes of our App
         * The action name was inspired from Laravel `php artisan make:controller --resource`
         */
        $routes = [
            'index' => array(
                'route' => '/',
                'controller' => 'CRUDController',
                'action' => 'index',
                'method' => 'GET'
            ),
            'create' => array(
                'route' => '/create',
                'controller' => 'CRUDController',
                'action' => 'create',
                'method' => 'GET'
            ),
            'update' => array(
                'route' => '/create',
                'controller' => 'CRUDController',
                'action' => 'update',
                'method' => 'PUT'
            ),
            'delete' => array(
                'route' => '/create',
                'controller' => 'CRUDController',
                'action' => 'delete',
                'method' => 'DELETE'
            )
        ];
        $this->setRoutes($routes);
    }
}