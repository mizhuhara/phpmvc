<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['barang']['namaBarang'];?></h5>
            <p class="card-title"><?= $data['barang']['penyimpanan'];?></p>
            <p class="card-subtitle mb-2 text-muted"><?= $data['barang']['merek'];?></p>
            <p class="card-title"><?= 'IDR ' . number_format($data['barang']['harga'], 0, ',', '.')?></p>
            <p>Stok : </p><p class="card-text"><?= $data['barang']['stock'];?></p>
            <img class="card-text" src="<?= BASEURL ?>/PHPMVC/public/img/gambar/<?= $data['barang']['img'];?>" alt="">   
            <a href="<?= BASEURL;?>/barang" class="card-link">Kembali</a>
        </div>
    </div>
</div>