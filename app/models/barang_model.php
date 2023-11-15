<?php

class Barang_model{

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

        // tambah data barang


        public function TambahDataBarang($data)
        {

            $query = "INSERT INTO barang (namaBarang, merek, stock, img) VALUES (:namaBarang, :merek, :stock, :img)";
        
        $this->db->query($query);
        
        $this->db->bind('namaBarang', $data['namaBarang']);
        $this->db->bind('merek', $data['merek']);
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
                        merek = :merek,
                        stock = :stock,
                        img = :img
                        WHERE id_barang = :id_barang ";
            // var_dump($_POST, $_FILES['img']);
            $this->db->query($query);
            
            $this->db->bind('namaBarang', $data['namaBarang']);
            $this->db->bind('merek', $data['merek']);
            $this->db->bind('stock', $data['stock']);
            $this->db->bind('img', $_FILES['img']['name']);
            $this->db->bind('id_barang', $data['id_barang']);
            return $this->db->rowCount();

            
        }
        
    
    


}
