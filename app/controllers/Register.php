<?php

class Register extends Controller{


    public function index()
    {
        $data['judul'] = 'Register';
        $this->views('template/header',$data);
        $this->views('register/index',$data);
        $this->views('template/footer');
    
    }



    public function Tambahregister()
    {
        if( $this->model('register_model')->TambahDataRegister($_POST) > 0 ){
            header('location:'. BASEURL . '/login');
            exit;
        }
    }






}




?>


