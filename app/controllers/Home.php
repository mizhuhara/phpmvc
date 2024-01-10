<?php

class Home extends Controller{
    public function index()
    {
        $data ['judul'] = 'home';
        $data['barang'] = $this->model('barang_model')->getAllBarang();
        $this -> views('template/header2', $data);
        $this -> views('home/index',$data);
        $this -> views('template/footer');

    }


    

}


