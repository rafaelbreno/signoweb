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
            'store' => array(
                'route' => '/store',
                'controller' => 'CRUDController',
                'action' => 'store',
                'method' => 'POST'
            ),
            'delete' => array(
                'route' => '/delete',
                'controller' => 'CRUDController',
                'action' => 'delete',
                'method' => 'POST'
            )
        ];
        $this->setRoutes($routes);
    }
}