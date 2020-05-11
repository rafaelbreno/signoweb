<?php


namespace SW\Controller;


abstract class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new \stdClass();
    }

    protected function render($view)
    {
        $dir = get_class($this);
        $dir = str_replace('App\\Controllers\\', '', $dir);
        $dir = str_replace('Controller', '', $dir);
        $dir = strtolower($dir);
        require_once __DIR__ . "/../../../App/Views/" . $dir . "/" . $view . ".phtml";
    }
}