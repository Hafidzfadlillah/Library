<?php

    // untuk menampilkan barang
    function select($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    // hapus barang
    function delete_barang($id_buku) {
        global $conn; 
        $query = "DELETE FROM buku WHERE id_buku = $id_buku";
        return mysqli_query($conn, $query);
    }

    function create_barang($data) {
        global $conn; // Asumsikan $conn adalah koneksi database Anda
    
        $judul_buku = htmlspecialchars($data["judul_buku"]);
        $pengarang = htmlspecialchars($data["pengarang"]);
        $penerbit = htmlspecialchars($data["penerbit"]);
        $jumlah_stok = htmlspecialchars($data["jumlah_stok"]);
    
        // Pastikan jumlah kolom sesuai dengan tabel database
        $query = "INSERT INTO buku (judul_buku, pengarang, penerbit, jumlah_stok) VALUES ('$judul_buku', '$pengarang', '$penerbit', '$jumlah_stok')";
    
        return mysqli_query($conn, $query);
    }
    function update_barang($post)
    {
    global $conn;

    $id_buku = $post['id_buku'];
    $pengarang = $post['pengarang'];
    $penerbit = $post['penerbit'];
    $jumlah_stok = $post['jumlah_stok'];

    // query ubah data
    $query = "UPDATE buku SET pengarang = '$pengarang', penerbit = '$penerbit', jumlah_stok = '$jumlah_stok' WHERE id_buku = 
    $id_buku";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>