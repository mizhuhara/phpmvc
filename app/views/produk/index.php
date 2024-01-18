<section class="pb-3">
  <div class="container mt-4">
    <div class="form-inline my-2 my-lg-0">
      <br>
      <br>
      <div class="d-flex justify-content-center">
        <div class="col-3">
          <form class="px-3" action="" method="POST">
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
        <div class="col-3 px-3">
          <select class="form-select" aria-label="Default select example">
            <option selected>Harga Tertinggi</option>
            <option value="1">Harga Terendah</option>
            <option value="2">Terbaru</option>
          </select>
        </div>
        <div class="col-3 px-3">
          <form action="<?= BASEURL; ?>/Product/cari" method="POST">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Cari..." name="keyword" id="keyword" autocomplete="off">
              <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<hr class="line">
<div class="container-fluid">
  <div class="row mt-5">
    <?php foreach ($data['barang'] as $barang) : ?>
      <div class="card-wrapper col-2 mt-2 mb-5">
        <div class="card-1 text-center">
          <br>
          <p class="brand"><?= $barang['namaBarang'] ?></p>
          <p class="harga"><?= 'IDR ' . number_format($barang['harga'], 0, ',', '.') ?></p>
          <img class="img-fluid mw-100" style="width: auto; height: 200px;" src="<?= BASEURL; ?>/PHPMVC/public/img/gambar/<?= $barang['img'] ?>" alt="">
          <br><br>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <a href="" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail<?= $barang['id_barang']?>">Beli Sekarang</a>
          </button>

          <!-- Modal -->
          <div class="modal fade" id="detail<?= $barang['id_barang']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <div class="d-flex  justify-content-center">
                  <h5 class="modal-title " id="exampleModalLabel"><?= $barang['namaBarang']?></h5>
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body w-100">
                  <div class="row">
                    <div class="col-5 mt-2">
                      <img class="img-fluid" src="<?= BASEURL; ?>/PHPMVC/public/img/gambar/<?= $barang['img'] ?>" alt="" class="mt-4">
                      <button class="btn btn-warning mt-3">Stok : <?= $barang['stock']?> tersisa </button>
                    </div>
                    <div class="col">
                      
                      <p class="text-start">Kapasitas RAM dan ROM: <?= $barang['penyimpanan']?></p>
                      <p class="text-start">Ukuran Layar : <?= $barang['ukuran_layar']?></p>
                      <p class="text-start">Refresh Rate : <?= $barang['refresh_rate']?></p>
                      <p class="text-start">Kamera utama : <?= $barang['kamera_utama']?></p>
                      <p class="text-start">Chipset : <?= $barang['chipset']?></p>
                      <p class="text-start">Baterai : <?= $barang['baterai']?></p>
                      <p class="text-start">Pengisian Daya : <?= $barang['charger']?></p>
                    </div>

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">Beli Sekarang</button>
                </div>
              </div>
            </div>
          </div>
          <br><br>
          <p class="spek"><?= $barang['penyimpanan']; ?></p>
        </div>
      </div>
    <?php endforeach  ; ?>

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
  </div>