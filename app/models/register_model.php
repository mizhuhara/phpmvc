<?php

class register_model{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function TambahDataRegister($data)
    {
        $query = "INSERT INTO users  VALUES (null,:username, :email, :password, :akses)";
        
        $this->db->query($query);
        
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('akses', 'user');
        return $this->db->rowCount();
    }
    
    
   





} 










?>