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
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <a href="" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail<?= $barang['id_barang'] ?>">Beli Sekarang</a>
          </button>

          <!-- Modal -->
          <div class="modal fade" id="detail<?= $barang['id_barang'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <div class="d-flex  justify-content-center">
                    <h5 class="modal-title " id="exampleModalLabel"><?= $barang['namaBarang'] ?></h5>
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body w-100">
                  <div class="row">
                    <div class="col-5 mt-2">
                      <img class="img-fluid" src="<?= BASEURL; ?>/PHPMVC/public/img/gambar/<?= $barang['img'] ?>" alt="" class="mt-4">
                      <button class="btn btn-warning mt-3">Stok Tersisa: <?= $barang['stock'] ?></button>
                    </div>
                    <div class="col">

                      <p class="text-start">Kapasitas RAM dan ROM: <?= $barang['penyimpanan'] ?> GB</p>
                      <p class="text-start">Ukuran Layar : <?= $barang['ukuran_layar'] ?> Inci</p>
                      <p class="text-start">Refresh Rate : <?= $barang['refresh_rate'] ?> Hz</p>
                      <p class="text-start">Kamera utama : <?= $barang['kamera_utama'] ?> MP</p>
                      <p class="text-start">Chipset : <?= $barang['chipset'] ?></p>
                      <p class="text-start">Baterai : <?= $barang['baterai'] ?> mAh</p>
                      <p class="text-start">Pengisian Daya : <?= $barang['charger'] ?> Watt</p>
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
    <?php endforeach; ?>

    <footer>
      <div class="container mb-5">
        <div class="footer row px-4">
          <div class="col-3 pt-5">
            <ul>
              <li class="fs-3 fw-bold pb-3">PRODUK</li>
              <li class="fs-6 fw-light">Redmi Note 12</li>
              <li class="fs-6 fw-light">Poco F4</li>
              <li class="fs-6 fw-light">Samsung A05s</li>
              <li class="fs-6 fw-light">Vivo V27e</li>
              <li class="fs-6 fw-light">Redmi 12</li>
              <li class="fs-6 fw-light">Xiaomi 12T</li>
              <li class="fs-6 fw-light">Samsung A05</li>
              <li class="fs-6 fw-light">Oppo A3s</li>
            </ul>
          </div>
          <div class="col-3 pt-5">
            <ul>
              <li class="fs-3 fw-bold pb-3">DUKUNGAN</li>
              <li class="fs-6 fw-light">Panduan Pengguna</li>
              <li class="fs-6 fw-light">Garansi</li>
              <li class="fs-6 fw-light">Gerai Terdekat</li>
              <li class="fs-6 fw-light">Service</li>
            </ul>
          </div>
          <div class="col-3 pt-5">
            <ul>
              <li class="fs-3 fw-bold pb-3">TENTANG</li>
              <li class="fs-6 fw-light">Tentang Kami</li>
              <li class="fs-6 fw-light">Kebijakan privasi</li>
            </ul>
          </div>
          <div class="col-3 pt-5">
            <ul>
              <li class="fs-3 fw-bold text-uppercase pb-3">Social Media</li>
              <div class="d-flex gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-instagram" style="color: white;" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-twitter-x" style="color: white;" viewBox="0 0 16 16">
                  <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-facebook" style="color: white;" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-threads" style="color: white;" viewBox="0 0 16 16">
                  <path d="M6.321 6.016c-.27-.18-1.166-.802-1.166-.802.756-1.081 1.753-1.502 3.132-1.502.975 0 1.803.327 2.394.948s.928 1.509 1.005 2.644q.492.207.905.484c1.109.745 1.719 1.86 1.719 3.137 0 2.716-2.226 5.075-6.256 5.075C4.594 16 1 13.987 1 7.994 1 2.034 4.482 0 8.044 0 9.69 0 13.55.243 15 5.036l-1.36.353C12.516 1.974 10.163 1.43 8.006 1.43c-3.565 0-5.582 2.171-5.582 6.79 0 4.143 2.254 6.343 5.63 6.343 2.777 0 4.847-1.443 4.847-3.556 0-1.438-1.208-2.127-1.27-2.127-.236 1.234-.868 3.31-3.644 3.31-1.618 0-3.013-1.118-3.013-2.582 0-2.09 1.984-2.847 3.55-2.847.586 0 1.294.04 1.663.114 0-.637-.54-1.728-1.9-1.728-1.25 0-1.566.405-1.967.868ZM8.716 8.19c-2.04 0-2.304.87-2.304 1.416 0 .878 1.043 1.168 1.6 1.168 1.02 0 2.067-.282 2.232-2.423a6.2 6.2 0 0 0-1.528-.161" />
                </svg>
            </ul>
          </div>
        </div>
      </div>
      <hr>
      <div class="copyrightText d-flex justify-content-between px-5 py-5">
        <a>Copyright © 2022 - 2024 Gadget Store</a>
        <a>Indonesia / Indonesia</a>
      </div>
    </footer>
  </div>
</div>