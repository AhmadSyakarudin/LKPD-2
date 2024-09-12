<?php
// Fungsi untuk menghitung total pembayaran setelah diskon
function hitungTotalPembayaran($totalPembelian, $tanggalPembelian) {
    // Mendapatkan nama hari dalam bahasa Inggris (misalnya: Monday, Tuesday, dst.)
    $hariIni = date('l', strtotime($tanggalPembelian)); 
    //strtotime mengonversi string tanggal atau waktu menjadi timestamp Unix.
    //tanggalPembelian variabel yang berisi string tanggal atau waktu.

    // Diskon
    $diskonHariSelasa = 0.05; // Diskon 5% pada hari Selasa
    $diskonSeratusRibu = 0.07; // Diskon 7% jika total pembelian >= 100.000

    //Inisialisasi: Menetapkan totalPembayaran awal sama dengan totalPembelian.
    $totalPembayaran = $totalPembelian;

    // Cek apakah hari ini adalah Selasa (Tuesday)
    //-= fungsinya untuk mengurangi nilai variabel dengan nilai yang ditentukan, dan kemudian menyimpan hasilnya kembali ke variabel tersebut.
    //== fungsinya untuk mengecek apakah nilainya sama atau tidak
    //$hariIni dipeoleh dari fungsi date yang menggunakan strtotime
    //alurnya totalPembayaran dikali diskon, lalu hasilnya dikurangi dengan totalpembayaran
    if ($hariIni == 'Tuesday') {
        $totalPembayaran -= $totalPembayaran * $diskonHariSelasa; // Kurangi 5%
    }

    // Cek apakah total pembelian >= 100.000, jika iya diskon 7% (menggantikan diskon hari Selasa)
    if ($totalPembelian >= 100000) {
        //-= fungsinya untuk mengurangi nilai variabel dengan nilai yang ditentukan, dan kemudian menyimpan hasilnya kembali ke variabel tersebut.
        //+= fungsinya untuk menambahkan nilai variabel dengan nilai yang ditentukan, dan kemudian menyimpan hasilnya kembali ke variabel tersebut.
        //alurnya totalPembayaran dikali diskon, lalu hasilnya dikurangi dengan totalpembayaran 
        $totalPembayaran -= $totalPembayaran * $diskonSeratusRibu; // Kurangi 7%
    }

    // Mengembalikan nilai yaitu total pembayaran
    return $totalPembayaran;
}

// Inisialisasi(menetapkan nilai awal) nilainya adalah total pembelian dan tanggal pembelian
$totalPembelian = 130000; // Total pembelian
$tanggalPembelian = '2024-09-13'; // Tanggal pembelian dalam format Y-m-d (misalnya: 2024-09-13 untuk hari Jumat/Friday)

// Memanggil fungsi hitungTotalPembayaran untuk mendapatkan total yang harus dibayar
$totalBayar = hitungTotalPembayaran($totalPembelian, $tanggalPembelian);

// Mendapatkan nama hari dalam format lowercase (huruf kecil)
$hariIni = date('l', strtotime($tanggalPembelian));
$hariIniLower = strtolower($hariIni);

// Menampilkan total belanja dan total yang harus dibayar
echo "<p>Hari ini: " . $hariIniLower . "</p>";
echo "<p>Total belanja: Rp " . number_format($totalPembelian, 0, ',', '.') . "</p>";
echo "<p>Total yang harus dibayar: Rp " . number_format($totalBayar, 0, ',', '.') . "</p>";
?>
