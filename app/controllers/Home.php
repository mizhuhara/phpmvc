<?php

class Home extends Controller{
    public function index()
    {
        $data ['judul'] = 'home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this -> views('template/header', $data);
        $this -> views('home/index',$data);
        $this -> views('template/footer');

    }

}


