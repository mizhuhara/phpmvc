<section>
  <div class="container mt-4">
    <div class="form-inline my-2 my-lg-0">
      <br>
      <br>
      <div class="d-flex justify-content-center">
        <div class="col-3">
          <form class="" action="" method="POST">
            <select class="form-select" id="merek" name="merek" aria-label="Default select example">
              <option value="ALL">ALL</option>
              <option value="Xiaomi">Xiaomi</option>
              <option value="Samsung">Samsung</option>
              <option value="Vivo">Vivo</option>
              <option value="Oppo">Oppo</option>
              <option value="Iphone">Iphone</option>
              <option value="Realme">Realme</option>
            </select>
            <button class="btn btn-primary" type="submit">Filter</button>
          </form>
        </div>
        <div class="col-3">
          <select class="form-select" aria-label="Default select example">
            <option selected>Harga Tertinggi</option>
            <option value="1">Harga Terendah</option>
            <option value="2">Terbaru</option>
          </select>
        </div>
        <div class="col-3">
          <form action="<? BASEURL; ?>/mahasiswa/cari" method="POST">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Cari..." id="keyword" autocomplete="off">
              <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<br><br><br>
<hr class="line">
<section class="container-fluid">
  <div class="main-hero row mt-5 px-4">


    <?php foreach ($data['barang'] as $barang) : ?>
      <div class="card-wrapper col-2 mt-2">
        <div class="card-1 text-center">
          <br>
          <p class="brand"><?= $barang['namaBarang'] ?></p>
          <p class="harga"><?= 'IDR ' . number_format($barang['harga'], 0, ',', '.') ?></p>
          <img class="img-fluid" src="<?= BASEURL; ?>/PHPMVC/public/img/gambar/<?= $barang['img'] ?>" alt="">
          <br><br>
          <button class="button px-2 py-1">Beli Sekarang</button>
          <br><br>
          <p class="spek"><?= $barang['penyimpanan']; ?></p>
        </div>
      </div>
    <?php endforeach; ?>

    <footer>
      <div class="container">
        <div class="footer row px-4">
          <div class="col-3">
            <br><br><br>
            <ul>
              <li>PRODUK</li>
              <br>
              <li>Redmi Note 12</li>
              <li>Poco F4</li>
              <li>Samsung A05s</li>
              <li>Vivo V27e</li>
              <li>Redmi 12</li>
              <li>Xiaomi 12T</li>
              <li>Samsung A05</li>
              <li>Oppo A3s</li>
              <br><br><br><br><br>
            </ul>
          </div>
          <div class="col-3">
            <br><br><br>
            <ul>
              <li>DUKUNGAN</li>
              <br>
              <li>Panduan Pengguna</li>
              <li>Garansi</li>
              <li>Gerai Terdekat</li>
              <li>Service</li>
            </ul>
          </div>
          <div class="col-3">
            <br><br><br>
            <ul>
              <li>TENTANG</li>
              <br>
              <li>Tentang Kami</li>
              <li>Kebijakan privasi</li>
            </ul>
          </div>
          <div class="col-3 ">
            <br><br><br>
            <ul>
              <li>Social Media</li>
              <br>
            </ul>
            <div class="d-flex gap-3 px-2">
              <img src="<?= BASEURL; ?>/img/Twitter.jpg" alt="">
              <img src="<?= BASEURL; ?>/img/Youtube.jpg" alt="">
              <img src="<?= BASEURL; ?>/img/Facebook.jpg" alt="">
              <img src="<?= BASEURL; ?>/img/Instagram.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="copyrightText d-flex justify-content-between px-5 py-5">
        <a>Copyright © 2022 - 2023 Gadget Store</a>
        <a>Indonesia / Indonesia</a>
      </div>
    </footer>