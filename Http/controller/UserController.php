<?php


use greenweb\addon\controller\AdminController;

class UserController extends AdminController
{
    public function index()
    {
        return $this->view('child/index',[
            'tst','test'
        ]);
    }

    public function permission()
    {
        dd([
            'vars' => $this->vars
        ]);
    }
}