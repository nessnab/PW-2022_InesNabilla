<?php

$connect = mysqli_connect("localhost","root","","akademik_sisteminformasi");

// cek koneksi
if(mysqli_connect_errno()){
    echo "Koneksi Database gagal :" . mysqli_connect_error();
}else{
    echo "Koneksi Berhasil";
}

?>