<?php 

// Fungsi untuk membuat array unik dari parameter variadik
// Parameter variadik ...$jurusan memungkinkan fungsi menerima jumlah argumen yang tidak terbatas
function createArray(...$jurusan) {

    // Inisialisasi array kosong untuk menyimpan hasil
    $arr = [];

    // Iterasi melalui setiap nilai dalam parameter variadik $jurusan
    foreach ($jurusan as $value) {
        // Mengubah nilai menjadi huruf kapital untuk membandingkan secara konsisten
        // Cek apakah nilai yang sudah diubah menjadi kapital tidak ada dalam array $arr
        if (in_array(strtoupper($value), $arr) == false) {
            // Jika nilai belum ada dalam array $arr, tambahkan nilai tersebut ke array
            array_push($arr, strtoupper($value));
        }
    }

    // Mengembalikan array yang telah diisi dengan nilai-nilai unik dan kapital
    // Contoh: [PPLG, HTL, KLN, PMN, pplg, htl]
    return $arr;
}

// Memanggil fungsi createArray dengan beberapa argumen
// Menampilkan hasil fungsi menggunakan print_r untuk format yang mudah dibaca
//createArray untuk menghasilkan dan mengembalikan sebuah array berdasarkan nilai input yang diberikan.
print_r(createArray("PPLG", "HTL", "KLN", "PMN", "pplg", "htl"));

?>

