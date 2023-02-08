<?php

class User_model{
    private $user = "user";
    private $operator = "operator";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllUsers(){
        $this->db->query("SELECT * FROM $this->user");
        return $this->db->resultAll();
    }

    public function checkUserByUsername($data){
        $this->db->query("SELECT * FROM $this->user WHERE username = :username");
        $this->db->bind("username", $data['username']);
        return $this->db->rowCount();
    }

    public function checkOperatorByUsername($data){
        $this->db->query("SELECT * FROM $this->operator WHERE username = :username");
        $this->db->bind("username", $data['username']);
        return $this->db->rowCount();
    }

    public function getUserDataByUsername($data){
        $this->db->query("SELECT * FROM $this->user WHERE username = :username");
        $this->db->bind("username", $data['username']);
        return $this->db->result();
    }

    public function getOperatorDataByUsername($data){
        $this->db->query("SELECT * FROM $this->operator WHERE username = :username");
        $this->db->bind("username", $data['username']);
        return $this->db->result();
    }
}