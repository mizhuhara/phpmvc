<div class="container">

    <div class="jumbotron mt-4">
        <h1 class="display-4">Selamat datang di website saya</h1>
        <hr class="my-4">
        <a class="btn btn-primary btn-l4" href="">klik

        </a>
    </div>

</div>

<?php foreach ($data['barang'] as $barang) : ?>

    <div class="container mt-5">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center text-capitalize"><?= $barang['namaBarang']; ?></h5>
                <img src="<?= BASEURL; ?>/PHPMVC/public/img/gambar/<?= $barang['img']; ?>" class="card-img-top" alt="...">
                <p class="card-text"><?= $barang['penyimpanan']; ?></p>
                <p class="card-text"><?= $barang['merek']; ?></p>
                <p class="card-text"><?= 'IDR ' . number_format($barang['harga'], 0, ',', '.') ?></p>
                <p>Stok : <?= $barang['stock']; ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>