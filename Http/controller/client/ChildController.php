<?php


use greenweb\addon\controller\ClientController;

class ChildController extends ClientController
{
    public function index()
    {
        dd('check');
        return [
            'client' => $this->vars
        ];
    }
}