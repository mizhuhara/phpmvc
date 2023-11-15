// mahasiswa
$(function () {
  $(".tambahDataMHS").on("click", function () {
    $("#formModalLabel").html("Tambah Data");
    $(".modal-footer button[type=submit]").html("Tambah Data");
  });

  $(".tampilModelUbah").on("click", function () {
    $("#formModalLabel").html("Ubah Data");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "http://phpmvc.test/mahasiswa/ubah"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://phpmvc.test/mahasiswa/getUbah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#nrp").val(data.nrp);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
        console.log(data);

      },
    });
  });
});

// barang
$(function barang() {
  $(".tambahDataBarang").on("click", function barang() {
    $("#formModalLabel").html("Tambah Data");
    $(".modal-footer button[type=submit]").html("Tambah Data");
  });

  $(".tampilModelUbahBarang").on("click", function () {
    $("#formModalLabel").html("Ubah Data");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "http://phpmvc.test/barang/ubahBarang"
    );
    // Mengambil id_barang dari elemen yang sesuai, contoh menggunakan atribut data-id
    const id_barang = $(this).data("id");

    $.ajax({
      url: "http://phpmvc.test/barang/getUbahBarang",
      data: { id_barang: id_barang }, // Menggunakan 'id_barang' sebagai nama indeks
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id_barang").val(data.id_barang);
        $("#namaBarang").val(data.namaBarang);
        $("#merek").val(data.merek);
        $("#stock").val(data.stock);
        // $("#img").val(data.img);

      },
    });
  });
});
