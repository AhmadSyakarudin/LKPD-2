<?php 

// Fungsi untuk menentukan jenis koin ratusan yang diperlukan dari total uang
function Ratusan($uang) {
    // Inisialisasi array kosong untuk menyimpan jenis koin yang digunakan
    $arr = [];

    // Ambil 4 digit terakhir dari jumlah uang, untuk menentukan ratusan yang relevan
    $koinRatusan = substr($uang, -4);

    // Cek apakah koin Rp. 500 ada dalam 4 digit terakhir uang
    // Jika ada, kurangi $koinRatusan dengan 500 dan tambahkan "Rp. 500" ke array $arr
    if ($koinRatusan % 500 != $koinRatusan) {
        $koinRatusan -= 500;
        array_push($arr, "Rp. 500");
    }

    // Cek apakah koin Rp. 200 ada dalam sisa 4 digit terakhir uang
    // Jika ada, kurangi $koinRatusan dengan 200 dan tambahkan "Rp. 200" ke array $arr
    if ($koinRatusan % 200 != $koinRatusan) {
        $koinRatusan -= 200;
        array_push($arr, "Rp. 200");
    }

    // Cek apakah koin Rp. 100 ada dalam sisa 4 digit terakhir uang
    // Jika ada, kurangi $koinRatusan dengan 100 dan tambahkan "Rp. 100" ke array $arr
    if ($koinRatusan % 100 != $koinRatusan) {
        $koinRatusan -= 100;
        array_push($arr, "Rp. 100");
    }

    // Tampilkan jenis koin yang digunakan untuk jumlah uang yang diberikan
    echo "Jenis ratusan untuk Uang Rp. " . number_format($uang,0,'.','.') . " : <br>";
    
    // Tampilkan hasil dalam bentuk daftar terurut
    echo "<ul>";
    foreach ($arr as $value) {
        // Untuk setiap item dalam array $arr, tampilkan item dalam daftar
        echo "<li>  $value  </li>";
    }
    echo "</ul>"; // Tutup tag daftar terurut
}

// Memanggil fungsi Ratusan dengan jumlah uang Rp. 325500
ratusan(325500);

?>
