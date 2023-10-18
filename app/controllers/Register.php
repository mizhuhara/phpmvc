<?php

class Register extends Controller{


    public function index()
    {
        $data['judul'] = 'Register';
        $this->views('template/header',$data);
        $this->views('register/index',$data);
        $this->views('template/footer');
    
    }







}




?>


