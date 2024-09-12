<?php

// Loop for yang akan berjalan dari nilai $i = 1 hingga $i < 30
for ($i = 1; $i < 30; $i++) {
    // Cek apakah 120 habis dibagi dengan $i, artinya 120 modulus $i sama dengan 0 (sisa bagi = 0)
    if (120 % $i == 0) {
        // Jika iya, tampilkan hasil pembagian 120 dengan $i. Fungsi round() digunakan untuk memastikan hasilnya dibulatkan
        echo "120 : $i = " . round(120 / $i) . "<br>";
    }
}
?>
