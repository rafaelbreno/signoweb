<?php


namespace SW\Controller;


abstract class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new \stdClass();
    }

    protected function content() {
        $dir = get_class($this);
        $dir = str_replace('App\\Controllers\\', '', $dir);
        $dir = str_replace('Controller', '', $dir);
        $dir = strtolower($dir);
        require_once "../App/Views/" . $dir . "/" . $this->view->module . ".phtml";
    }

    protected function render($view)
    {
        $this->view->module = $view;
        require_once "../App/Views/layout.phtml";
    }
}