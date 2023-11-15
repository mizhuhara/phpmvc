<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="container mt-3">


    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">


            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tambahDataBarang" data-bs-toggle="modal" data-bs-target="#formModalBarang">
                Tambah Data
            </button>

            <br><br>




            <h3>Daftar Barang</h3>
        </div>

        <ul class="list-group">
            <?php foreach ($data['barang'] as $barang) : ?>

                <li class="list-group-item ">
                    <?= $barang['namaBarang']; ?>
                    <a href="<?= BASEURL; ?>/barang/hapusBarang/<?= $barang['id_barang'] ?>" class="badge bg-danger float-end " onclick="return confirm('Yakin?') ">hapus <?= $barang['id_barang']?></a>
                    <a href="<?= BASEURL; ?>/barang/ubahBarang/<?= $barang['id_barang'] ?>" class="badge bg-warning float-end tampilModelUbahBarang" data-bs-toggle="modal" data-bs-target="#formModalBarang" data-id="<?= $barang['id_barang']; ?>">Edit</a>
                    <a href="<?= BASEURL; ?>/barang/detailBarang/<?= $barang['id_barang'] ?>" class="badge bg-primary float-end  ">Detail</a>
                </li>

            <?php endforeach; ?>
        </ul>



    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModalBarang" tabindex="-1" aria-labelledby="formModalBarang" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!--  -->
                <form action="<?= BASEURL; ?>/barang/tambahBarang" method="post" enctype="multipart/form-data">

                    <!--  -->
                    <input type="hidden" name="id_barang" id="id_barang">

                    <!--  -->

                    <div class="mb-3 form-group">
                        <label for="namaBarang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="namaBarang" name="namaBarang">
                    </div>

                    <div class="mb-3 form-group">

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

                    <div class="mb-3 form-group">

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

                    <div class="mb-3 form-group">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga">
                    </div>

                    <div class="mb-3 form-group">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock">
                    </div>


                    <div class="mb-3 form-group">
                    <label for="img" class="form-label">Image</label>
                    <input type="file" class="form-control" id="img" name="img">
                    
                    </div>

                

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Data</button>
                </form>
            </div>
        </div>
    </div>
</div>