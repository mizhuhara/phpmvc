<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Gadget<sup>store</sup></div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Database</span>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/login/logout">Log Out</a>
                <i class="fas fa-fw fa-table"></i>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>
                    <!-- Topbar Search -->
                    <button type="button" class="btn btn-primary tambahDataBarang" data-bs-toggle="modal" data-bs-target="#formModalBarang">
                        Tambah Data
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Alerts -->
                        <!-- Nav Item - Messages -->
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline t small">Kazuya</span>
                                <img class="img-profile rounded-circle" src="./img/PP2.jpg">
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="row">
                    <div class="col-lg-6">
                        <?php Flasher::flash(); ?>
                    </div>
                </div>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <th class="text-center">Gambar</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Merek</th>
                                            <th class="text-center">Penyimpanan</th>
                                            <th class="text-center">Harga</th>
                                            <th class="text-center">Stock</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($data['barang'] as $barang) : ?>
                                        <tbody>
                                            <tr>
                                                <td class="text-center" style="width: 25%; height: 50px;"><img src="<?= BASEURL ?>PHPMVC/public/img/gambar/<?= $barang['img']; ?>" alt="Gambar Barang" class="mw-100" style="width: auto; height: 200px;"></td>
                                                <td class="text-center"> <?= $barang['namaBarang']; ?></td>
                                                <td class="text-center"><?= $barang['merek']; ?></td>
                                                <td class="text-center"><?= $barang['penyimpanan']; ?> GB</td>
                                                <td class="text-center"><?= 'IDR ' . number_format($barang['harga'], 0, ',', '.') ?></td>
                                                <td class="text-center"><?= $barang['stock']; ?></td>
                                                <td class="">
                                                    <a href="<?= BASEURL; ?>/barang/hapusBarang/<?= $barang['id_barang'] ?>" class="badge bg-danger float-start" onclick="return confirm('Yakin?') " style="height: 50px;"> <img src="./img/hapus.svg" alt="" class="mh-100 p-2" style="width: 50px; height: 50px;"></a>

                                                    <a href="<?= BASEURL; ?>/barang/ubahBarang/<?= $barang['id_barang'] ?>" class="badge bg-warning float-end tampilModelUbahBarang" data-bs-toggle="modal" data-bs-target="#formModalBarang" data-id="<?= $barang['id_barang']; ?> style=" height: 50px;><img src="./img/edit.svg" alt="" class="mh-100 p-2" style="width: 50px; height: 50px;"></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>
                    <!-- Logout Modal-->
                    <!-- Modal -->
                    <div class="modal fade" id="formModalBarang" tabindex="-1" aria-labelledby="formModalBarang" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!--  -->
                                    <form action="<?= BASEURL; ?>barang/tambahBarang" method="post" enctype="multipart/form-data">
                                        <!--  -->
                                        <input type="hidden" name="id_barang" id="id_barang">
                                        <div class="row">
                                            <!--  -->
                                            <div class="col-sm-6 mb-3 form-group">
                                                <label for="namaBarang" class="form-label">Nama Barang</label>
                                                <input type="text" class="form-control" id="namaBarang" name="namaBarang">
                                            </div>
                                            <div class="col-sm-6 mb-3 form-group">
                                                <label for="penyimpanan" class="form-label">Penyimpanan</label>
                                                <select class="form-select" id="penyimpanan" name="penyimpanan" aria-label="Default select example">
                                                    <option value="3+32">3+32</option>
                                                    <option value="4+64">4+64</option>
                                                    <option value="4+128">4+128</option>
                                                    <option value="6+128">6+128</option>
                                                    <option value="6+128">8+128</option>
                                                    <option value="8+256">8+256</option>
                                                    <option value="12+256">12+256</option>
                                                    <option value="12+512">12+512</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 mb-3 form-group">
                                                <label for="merek" class="form-label">Merek</label>
                                                <select class="form-select" id="merek" name="merek" aria-label="Default select example">
                                                    <option value="Xiaomi">xiaomi</option>
                                                    <option value="Samsung">samsung</option>
                                                    <option value="Vivo">Vivo</option>
                                                    <option value="oppo">oppo</option>
                                                    <option value="Iphone">Iphone</option>
                                                    <option value="Realme">Realme</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6 mb-3 form-group">
                                                <label for="harga" class="form-label">Harga</label>
                                                <input type="text" class="form-control" id="harga" name="harga">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 mb-3 form-group">
                                                <label for="ukuran_layar" class="form-label">Ukuran Layar</label>
                                                <input type="text" class="form-control" id="ukuran_layar" name="ukuran_layar">
                                            </div>
                                            <div class="col-sm-6 mb-3 form-group">
                                                <label for="refresh_rate" class="form-label">Refresh Rate</label>
                                                <input type="text" class="form-control" id="refresh_rate" name="refresh_rate">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 mb-3 form-group">
                                                <label for="kamera_utama" class="form-label">Kamera Utama</label>
                                                <input type="text" class="form-control" id="kamera_utama" name="kamera_utama">
                                            </div>
                                            <div class="col-sm-6 mb-3 form-group">
                                                <label for="chipset" class="form-label">Chipset</label>
                                                <input type="text" class="form-control" id="chipset" name="chipset">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 mb-3 form-group">
                                                <label for="baterai" class="form-label">Baterai</label>
                                                <input type="text" class="form-control" id="baterai" name="baterai">
                                            </div>
                                            <div class="col-sm-6 mb-3 form-group">
                                                <label for="charger" class="form-label">Charger</label>
                                                <input type="text" class="form-control" id="charger" name="charger">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 mb-3 form-group">
                                                <label for="stock" class="form-label">Stock</label>
                                                <input type="number" class="form-control" id="stock" name="stock">
                                            </div>
                                            <div class="col-sm-6 mb-3 form-group">
                                                <label for="img" class="form-label">Image</label>
                                                <input type="file" class="form-control" id="img" name="img">
                                            </div>
                                        </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save Data</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>