<?php

include 'config/app.php';


// menerima id barang yang dipilih admin
$id_buku = (int)$_GET['id_buku'];

if (delete_barang($id_buku)> 0){
    echo "<script>
         alert('Data Barang Berhasil Dihapus'); 
         document.location.href = 'databuku.php';
    </script>";
}else{
    echo "<script>
         alert('Data Barang Gagal Dihapus'); 
         document.location.href = 'databuku.php';
    </script>";
}