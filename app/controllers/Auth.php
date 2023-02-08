<?php

class Auth extends Controller{
    public function index(){
        $this->view("templates/header");
        $this->view("auth/login");
        $this->view("templates/footer");
    }

    public function register(){
        $this->view("templates/header");
        $this->view("auth/register");
        $this->view("templates/footer");
    }

    public function loginUser(){
        if($this->model("User_model")->checkOperatorByUsername($_POST) > 0){
            $operator = $this->model("User_model")->getOperatorDataByUsername($_POST);
            if(password_verify($_POST['password'], $operator['password'])){
               Redirect::to("admin"); 
            }
        } else if($this->model("User_model")->checkUserByUsername($_POST) > 0){
            $user = $this->model("User_model")->getUserDataByUsername($_POST);
            if(password_verify($_POST['password'], $user['password'])){
               Redirect::to("home");
            }
        }
    }
}