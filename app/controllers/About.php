<?php

class About extends Controller{

    public function index($nama = 'kazuya', $pekerjaan = 'pemula', $umur = '1000'){
        $data ['nama'] = $nama;
        $data ['pekerjaan'] = $pekerjaan;
        $data ['umur'] = $umur;
        $data ['judul'] = 'About';
        $this -> views('template/header', $data);
        $this -> views('about/index', $data);
        $this -> views('template/footer');

    }


    public function page()
    {
        $data ['judul'] ='Page';
        $this -> views('template/header',$data);
        $this -> views('about/page');
        $this -> views('template/footer');

    }
}


?>