<?php

class Product extends Controller{
    public function index()
    {
        $data['judul'] = 'Product';
        $data['barang'] = $this->model('barang_model')->getAllBarang();
        if (isset($_POST['merek'])) {
            // var_dump($_POST['merek'] == 'ALL');
            if($_POST['merek'] == 'ALL'){
                $data['barang'] = $this->model('barang_model')->getAllBarang();

            }else{
                $merek = $_POST['merek'];
                $data['barang'] = $this->model('barang_model')->getBarangByMerek($merek);

            }
        }
        $this->views('template/header',$data);
        $this->views('produk/index',$data);
        $this->views('template/footer');
    }
}