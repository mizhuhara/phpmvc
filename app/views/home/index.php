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
                <h5 class="card-title"><?= $barang['namaBarang']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $barang['merek']; ?></h6>
                <p class="card-text"><?= $barang['stock']; ?></p>
                <img class="card-text" src="<?= BASEURL ?>/img/gambar/<?= $barang['img']; ?>" alt="">
                <a href="<?= BASEURL; ?>/barang" class="card-link">Kembali</a>
            </div>
        </div>

    </div>
<?php endforeach; ?>