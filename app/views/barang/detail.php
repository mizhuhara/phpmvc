<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['barang']['namaBarang'];?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['barang']['merek'];?></h6>
            <p class="card-text"><?= $data['barang']['stock'];?></p>
            <img class="card-text" src="<?= BASEURL ?>/public/img/gambar/<?= $data['barang']['img'];?>" alt="">   
            <a href="<?= BASEURL;?>/barang" class="card-link">Kembali</a>
        </div>
    </div>

</div>