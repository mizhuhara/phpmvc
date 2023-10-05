<?php

class Home extends Controller{
    public function index()
    {
        $data ['judul'] = 'home';
        $this -> views('template/header', $data);
        $this -> views('home/index');
        $this -> views('template/footer');

    }

}


