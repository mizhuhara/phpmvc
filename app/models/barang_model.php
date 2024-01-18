<?php

class Barang_model
{

    private $table = 'barang';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // view
    public function getAllBarang()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBarangById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_barang=:id_barang');
        $this->db->bind('id_barang', $id);
        return $this->db->single();
    }
    public function getBarangByMerek($merek)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE merek=:merek');
        $this->db->bind('merek', $merek);
        return $this->db->resultSet();
    }

    // tambah data barang


    public function TambahDataBarang($data)
    {

        $query = "INSERT INTO barang (namaBarang, penyimpanan, merek, harga, ukuran_layar, refresh_rate, kamera_utama, chipset, baterai, charger, stock, img) VALUES (:namaBarang, :penyimpanan, :merek, :harga, :ukuran_layar, :refresh_rate, :kamera_utama, :chipset, :baterai, :charger, :stock, :img)";

        $this->db->query($query);

        $this->db->bind('namaBarang', $data['namaBarang']);
        $this->db->bind('penyimpanan', $data['penyimpanan']);
        $this->db->bind('merek', $data['merek']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('ukuran_layar', $data['ukuran_layar']);
        $this->db->bind('refresh_rate', $data['refresh_rate']);
        $this->db->bind('kamera_utama', $data['kamera_utama']);
        $this->db->bind('chipset', $data['chipset']);
        $this->db->bind('baterai', $data['baterai']);
        $this->db->bind('charger', $data['charger']);
        $this->db->bind('stock', $data['stock']);
        $this->db->bind('img', $_FILES['img']['name']);



        return $this->db->rowCount();
    }


    // hapus barang


    public function hapusDataBarang($id)
    {
        $query = "DELETE FROM barang WHERE id_barang= :id_barang ";
        $this->db->query($query);
        $this->db->bind("id_barang", $id);

        return $this->db->rowCount();
    }


    // edit data barang
    public function ubahDataBarang($data)
    {
        $query = "UPDATE barang SET 
                        namaBarang = :namaBarang,
                        penyimpanan = :penyimpanan,
                        merek = :merek,
                        harga = :harga,
                        ukuran_layar = :ukuran_layar,
                        refresh_rate = :refresh_rate,
                        kamera_utama = :kamera_utama,
                        chipset = :chipset,
                        baterai = :baterai,
                        charger = :charger,
                        stock = :stock,
                        img = :img
                        WHERE id_barang = :id_barang ";
        // var_dump($_POST, $_FILES['img']);
        $this->db->query($query);

        $this->db->bind('namaBarang', $data['namaBarang']);
        $this->db->bind('penyimpanan', $data['penyimpanan']);
        $this->db->bind('merek', $data['merek']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('ukuran_layar', $data['ukuran_layar']);
        $this->db->bind('refresh_rate', $data['refresh_rate']);
        $this->db->bind('kamera_utama', $data['kamera_utama']);
        $this->db->bind('chipset', $data['chipset']);
        $this->db->bind('baterai', $data['baterai']);
        $this->db->bind('charger', $data['charger']);
        $this->db->bind('stock', $data['stock']);
        $this->db->bind('img', $_FILES['img']['name']);
        $this->db->bind('id_barang', $data['id_barang']);
        return $this->db->rowCount();
    }

    public function cariDataProduk(){
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM barang WHERE merek LIKE :keyword or namaBarang LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
