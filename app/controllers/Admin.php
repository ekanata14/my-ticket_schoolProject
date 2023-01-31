<?php

class Admin extends Controller{
    public function index(){
        $data = [
            'title' => "Admin"
        ];

        $this->view("templates/header");
        $this->view("admin/index");
        $this->view("templates/footer");
    }
}