<?php

class Barang extends Controller
{


    public function index()
    {
        $data['judul'] = 'Daftar Barang';
        $data['barang'] = $this->model('barang_model')->getAllBarang();
        $this->views('template/header1', $data);
        $this->views('barang/index', $data);
        $this->views('template/footer');
    }

    public function detailBarang($id)
    {
        $data['judul'] = 'Detail barang';
        $data['barang'] = $this->model('barang_model')->getBarangById($id);
        $this->views('template/header1', $data);
        $this->views('barang/detail', $data);
        $this->views('template/footer');
    }

    public function tambahBarang()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $namaBarang = $_POST['namaBarang'];
            $merek = $_POST['merek'];
            $stock = $_POST['stock'];

            // Cek apakah gambar diunggah
            if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
                $image_name = $_FILES['img']['name'];
                $tmp_image = $_FILES['img']['tmp_name'];
                $target_directory = $_SERVER['DOCUMENT_ROOT'] . '/PHPMVC/public/img/gambar/';
                $target_file = $target_directory . $image_name;

                // Pastikan direktori tujuan ada
                if (!file_exists($target_directory)) {
                    mkdir($target_directory, 0777, true);
                }

                // Periksa tipe file (hanya menerima gambar)
                $allowed_types = ['image/jpeg', 'image/jpg', 'image/png'];
                $image_type = $_FILES['img']['type'];
                if (!in_array($image_type, $allowed_types)) {
                    // Memanggil flash ketika gagal
                    Flasher::setFlash('gagal', 'ditambahkan (tipe file tidak valid)', 'danger');
                    header('location:' . BASEURL . '/barang');
                    exit;
                }

                // Periksa ukuran file (batasi ukuran gambar)
                $max_size = 2 * 1024 * 1024; // 2 MB
                $image_size = $_FILES['img']['size'];
                if ($image_size > $max_size) {
                    // Memanggil flash ketika gagal
                    Flasher::setFlash('gagal', 'ditambahkan (ukuran file terlalu besar)', 'danger');
                    header('location:' . BASEURL . '/barang');
                    exit;
                }

                if (move_uploaded_file($tmp_image, $target_file)) {
                    // Lokasi tempat menyimpan file gambar yang diunggah
                    $lokasi_simpan = '/PHPMVC/public/img/gambar/' . $image_name;

                    // Data barang beserta lokasi gambar
                    $data = [
                        'namaBarang' => $namaBarang,
                        'merek' => $merek,
                        'stock' => $stock,
                        'img' => $lokasi_simpan
                    ];

                    if ($this->model('Barang_model')->TambahDataBarang($data) > 0) {
                        // Memanggil flash ketika berhasil
                        Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                        header('location:' . BASEURL . '/barang');
                        exit;
                    } else {
                        // Memanggil flash ketika gagal
                        Flasher::setFlash('gagal', 'ditambahkan (gagal menyimpan data ke database)', 'danger');
                        header('location:' . BASEURL . '/barang');
                        exit;
                    }
                } else {
                    // Memanggil flash ketika gagal
                    Flasher::setFlash('gagal', 'ditambahkan (gagal mengunggah file)', 'danger');
                    header('location:' . BASEURL . '/barang');
                    exit;
                }
            } else {
                // Memanggil flash ketika gagal (tidak ada gambar diunggah)
                Flasher::setFlash('gagal', 'ditambahkan (gambar tidak diunggah)', 'danger');
                header('location:' . BASEURL . '/barang');
                exit;
            }
        }
    }

    // hapus barang
    public function hapusBarang($id)
    {
        if ($this->model('barang_model')->hapusDataBarang($id) > 0) {
            // memangil flash
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('location:' . BASEURL . '/barang');
            exit;
        } else {
            // memangil flash ketika gagal
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('location:' . BASEURL . '/barang');
            exit;
        }
    }


    // mengubah json
    public function getUbahBarang()
    {
        echo json_encode($this->model('barang_model')->getBarangById($_POST['id_barang']));
    }


    // ubah data barang
    public function ubahBarang()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $namaBarang = $_POST['namaBarang'];
            $merek = $_POST['merek'];
            $stock = $_POST['stock'];

            // Cek apakah gambar diunggah
            if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
                $image_name = $_FILES['img']['name'];
                $tmp_image = $_FILES['img']['tmp_name'];
                $target_directory = $_SERVER['DOCUMENT_ROOT'] . '/PHPMVC/public/img/gambar/';
                $target_file = $target_directory . $image_name;

                // Pastikan direktori tujuan ada
                if (!file_exists($target_directory)) {
                    mkdir($target_directory, 0777, true);
                }

                // Periksa tipe file (hanya menerima gambar)
                $allowed_types = ['image/jpeg', 'image/jpg', 'image/png'];
                $image_type = $_FILES['img']['type'];
                if (!in_array($image_type, $allowed_types)) {
                    // Memanggil flash ketika gagal
                    Flasher::setFlash('gagal', 'ditambahkan (tipe file tidak valid)', 'danger');
                    header('location:' . BASEURL . '/barang');
                    exit;
                }

                // Periksa ukuran file (batasi ukuran gambar)
                $max_size = 2 * 1024 * 1024; // 2 MB
                $image_size = $_FILES['img']['size'];
                if ($image_size > $max_size) {
                    // Memanggil flash ketika gagal
                    Flasher::setFlash('gagal', 'ditambahkan (ukuran file terlalu besar)', 'danger');
                    header('location:' . BASEURL . '/barang');
                    exit;
                }

                if (move_uploaded_file($tmp_image, $target_file)) {
                    // Lokasi tempat menyimpan file gambar yang diunggah
                    $lokasi_simpan = '/PHPMVC/public/img/gambar/' . $image_name;

                    // Data barang beserta lokasi gambar
                    $data = [
                        'namaBarang' => $namaBarang,
                        'merek' => $merek,
                        'stock' => $stock,
                        'img' => $lokasi_simpan
                    ];

                    if ($this->model('barang_model')->ubahDataBarang($_POST) > 0) {
                        // memangil flash
                        Flasher::setFlash('berhasil', 'diubah', 'success');
                        header('location:' . BASEURL . '/barang');
                        exit;
                    } else {
                        // memangil flash ketika gagal
                        Flasher::setFlash('gagal', 'diubah', 'danger');
                        header('location:' . BASEURL . '/barang');
                        exit;
                    }
                } else {
                    // Memanggil flash ketika gagal
                    Flasher::setFlash('gagal', 'ditambahkan (gagal mengunggah file)', 'danger');
                    header('location:' . BASEURL . '/barang');
                    exit;
                }
            } else {
                // Memanggil flash ketika gagal (tidak ada gambar diunggah)
                Flasher::setFlash('gagal', 'ditambahkan (gambar tidak diunggah)', 'danger');
                header('location:' . BASEURL . '/barang');
                exit;
            }
        }
    }
}
