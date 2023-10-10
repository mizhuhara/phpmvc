<?php

class Mahasiswa extends Controller{
    public function index()
    {
        $this-> views ('template/header');
        $this-> views('mahasiswa/index');
        $this -> views('template/footer');
    }
}

?>