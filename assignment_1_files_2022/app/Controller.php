<?php


abstract class Controller
{

    protected $m = null;
    protected $view = null;


    public function setModel(Model $m)
    {
        $m->$model;
    }

    public function setView(View $v)
    {
          $v->view;
    }

    abstract protected function run();

} 