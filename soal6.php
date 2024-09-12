<?php

//array ada 3 :
//array indeks = array yang terdiri cuman 1 baris
//array asosiatif = array yang memiliki string sebagai indeks untuk mengakses elemen
//array multidimensi = array yang memiliki array sebagai elemen.

// Definisikan array multidimensi $barang yang berisi beberapa item belanja
$barang = [
    [
        'nama_barang' => 'Pasta Gigi', // Nama barang
        'harga_barang' => 18000,       // Harga per unit barang
        'jumlah_beli' => 1,            // Jumlah unit yang dibeli
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 4,
    ],
];

// Inisialisasi variabel untuk menyimpan total harga dari semua barang yang dibeli
$price = 0;

// Tampilkan header untuk daftar belanjaan
echo "Daftar Belanjaan : </br>";

// Mulai daftar terurut (ordered list) untuk menampilkan item belanjaan
echo "<ol>";

// Iterasi melalui setiap item dalam array $barang menggunakan foreach
foreach ($barang as $item) {
    // Hitung subtotal harga untuk item saat ini
    $subPrice = $item['harga_barang'] * $item['jumlah_beli'];

    // Tampilkan nama barang, jumlah yang dibeli, dan harga subtotal dalam format teratur
    // number_format digunakan untuk memformat harga dengan pemisah ribuan
    echo "<li> " . $item['nama_barang'] . " (" . $item['jumlah_beli'] . ") : " . number_format($subPrice, 0, '.', '.') . "</li>";

    // Tambahkan subtotal harga ke total harga keseluruhan
    $price += $subPrice;
}

// Tutup tag daftar terurut
echo "</ol>";

// Tambahkan baris kosong untuk pemisah
echo "<br>";

// Tampilkan total harga yang harus dibayar dengan format mata uang
echo "Total harga yang harus dibayar adalah <b> Rp. " . number_format($price, 0, '.', '.') . "</b>";

?>
