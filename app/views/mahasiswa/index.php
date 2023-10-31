<div class="container mt-3">
    <div class="row">
        <div class="col-6">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data
            </button>

            <br><br>




            <h3>Daftar Mahasiswa</h3>
        </div>

        <ul class="list-group">
            <?php foreach ($data['mhs'] as $mhs) : ?>

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $mhs['nama']; ?>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge bg-primary">Detail</a>
                </li>

            <?php endforeach; ?>
        </ul>



    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!--  -->
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">

                    <div class="mb-3 form-group">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <div class="mb-3 form-group">
                        <label for="nrp" class="form-label">NRP</label>
                        <input type="number" class="form-control" id="nrp" name="nrp">
                    </div>

                    <div class="mb-3 form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>


                    <div class="mb-3 form-group">

                    <label for="jurusan"  class="form-label">Jurusan</label>
                    <select class="form-select" id="jurusan" name="jurusan" aria-label="Default select example">
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Multimedia">Multimedia</option>
                    <option value="Teknik Jaringan Kompuer">Teknik Jaringan Kompuer</option>
                    </select>

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