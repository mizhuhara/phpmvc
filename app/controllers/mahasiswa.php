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


    // fungsi tambah  data  mahasiwa

    public function tambah()
    { 
        if( $this->model('Mahasiswa_model')->TambahDataMahasiswa($_POST) > 0 ){
            // memangil flash
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('location:'. BASEURL . '/mahasiswa');
            exit;
        } else{
              // memangil flash ketika gagal
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('location:'. BASEURL . '/mahasiswa');
            exit;
        }
    }

    // Hapus data
    public function hapus($id)
    {
        if( $this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0 ){
            // memangil flash
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('location:'. BASEURL . '/mahasiswa');
            exit;
        } else{
              // memangil flash ketika gagal
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('location:'. BASEURL . '/mahasiswa');
            exit;
        }
    }


    public function getUbah()
    {
      echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }


    public function ubah()
    {
        if( $this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0 ){
            // memangil flash
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('location:'. BASEURL . '/mahasiswa');
            exit;
        } 
    }


}














?>