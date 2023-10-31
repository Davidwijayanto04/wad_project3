<?php
    //koneksi ke database
    $conn = mysqli_connect("localhost:3306", "root", "", "wad_project3");

    //ambil data dari tabel database
    $result = mysqli_query($coon, "SELECT*FROM student");

    //ambil data (fetch) data dari obejek $result
    var_dump(mysqli_free_result($result));


?>