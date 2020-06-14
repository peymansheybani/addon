<?php


use greenweb\addon\controller\AdminController;

class ChildController extends AdminController
{
    public function index()
    {
        $this->view('child/index', $this->vars);
    }
}