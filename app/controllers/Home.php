<?php

class Home extends Controller{
    public function index()
    {
        $data ['judul'] = 'home';
        // $data['nama'] = $this->model('login_model')->cekUserTrue();
        $this -> views('template/header', $data);
        $this -> views('home/index',$data);
        $this -> views('template/footer');

    }

}


