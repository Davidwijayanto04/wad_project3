<?php
    //koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "wad_project3");

    //ambil data dari tabel database
    $result = mysqli_connect($coon, "SELECT*FROM Student");

    //ambil data (fetch) data dari obejek $result
    var_dump(mysqli_fetch_object($result))

?>