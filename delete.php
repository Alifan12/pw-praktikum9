<?php

require 'koneksi.php';

//mengambil id yg ingin dihapus
$id = $_GET["id"];

//membuat alert menggunakan javascript
if (hapus($id) > 0) {
    //jika id ada pada database maka if ini jalan
    echo "
        <script>
            alert('Data karyawan ID $id BERHASIL dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data karyawan ID $id GAGAL dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
}