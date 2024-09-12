<?php 

// Fungsi untuk memeriksa jawaban dan menghitung jumlah jawaban benar dan salah
// Parameter $nama adalah nama peserta, dan ...$arrJawaban adalah daftar jawaban yang diberikan
function checkJawaban($nama, ...$arrJawaban) {
    // Daftar jawaban yang benar untuk soal
    $jawaban = ['A', 'D', 'C', 'C', 'B', 'A', 'E', 'B', 'A', 'E'];

    // Inisialisasi array kosong untuk menyimpan hasil jawaban benar atau salah
    $arrBenar = [];

    // Iterasi melalui setiap elemen dalam array $jawaban dengan index
    foreach ($jawaban as $key => $value) {
        // Cek apakah jawaban yang diberikan ($arrJawaban[$key]) sesuai dengan jawaban yang benar ($value)
        if ($arrJawaban[$key] == $value) {
            // Jika jawaban benar, tambahkan 1 ke array $arrBenar
            $arrBenar[] = 1;
        } else {
            // Jika jawaban salah, tambahkan 0 ke array $arrBenar
            $arrBenar[] = 0;
        }
    }

    // Tampilkan nama peserta
    echo "Nama : $nama <br>";

    // Hitung dan tampilkan jumlah jawaban benar
    // array_keys($arrBenar, 1) mengembalikan array dari semua key yang memiliki nilai 1
    // count() menghitung jumlah elemen dalam array hasil array_keys
    echo "Jumlah Jawaban benar : <b>" . count(array_keys($arrBenar, 1)) . "</b><br>";

    // Hitung dan tampilkan jumlah jawaban salah
    // array_keys($arrBenar, 0) mengembalikan array dari semua key yang memiliki nilai 0
    // count() menghitung jumlah elemen dalam array hasil array_keys
    echo "Jumlah Jawaban salah : <b>" . count(array_keys($arrBenar, 0)) . "</b><br>";
}

// Memanggil fungsi checkJawaban dengan nama peserta dan daftar jawaban yang diberikan
checkJawaban("Putri", 'A', 'D', 'C', 'C', 'B', 'A', 'E', 'B', 'A', 'E');

?>
