<?php
// Definisikan dua array indeks dengan nilai integer
//digunakan untuk mengakses elemen di dalam array
$array1 = [80, 77, 65, 89, 55, 12, 90, 86];
$array2 = [77, 99, 55, 81, 45, 90, 98];

// Gabungkan kedua array menjadi satu array
$combined_array = array_merge($array1, $array2);
// array_merge() menggabungkan elemen dari $array1 dan $array2

// menghilangkan elemen duplikat dari array yang telah digabung
$unique_array = array_unique($combined_array);
// array_unique() menghapus nilai yang duplikat dari array

// rsort untuk mengurutkan array dari nilai terbesar ke terkecil
rsort($unique_array);

// Tampilkan hasil array menggunakan foreach
foreach ($unique_array as $value) {
    // Untuk setiap nilai dalam $unique_array, cetak nilai tersebut diikuti dengan titik
    echo $value . ". ";
}
// foreach digunakan untuk iterasi melalui setiap elemen dalam $unique_array
// echo mencetak setiap nilai diikuti dengan ". " (spasi dan titik)
?>
