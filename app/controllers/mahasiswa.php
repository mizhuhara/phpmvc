<?php

class Mahasiswa extends Controller{
    public function index()
    {
        $data['judul'] = 'Daftar mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->views('template/header',$data);
        $this->views('mahasiswa/index',$data);
        $this->views('template/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->views('template/header',$data);
        $this->views('mahasiswa/detail',$data);
        $this->views('template/footer');
    }








}














?>