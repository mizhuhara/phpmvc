<?php

class Product extends Controller{
    public function index()
    {
        $data['judul'] = 'Product';
        $this->views('template/header',$data);
        $this->views('produk/index',$data);
        $this->views('template/footer');
    }
}