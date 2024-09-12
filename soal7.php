<?php

// Fungsi untuk membungkus teks jika lebih dari 50 karakter
function wrapText($text) {
    // Mengubah teks menjadi array karakter
    $count = str_split($text);

    // Cek jika jumlah karakter lebih dari 50
    if (count($count) > 50) {
        // Memotong teks hingga 50 karakter
        $text = substr($text, 0, 50);
        // Menambahkan elipsis "..." di akhir teks yang dipotong
        $text .= "...";
    }

    // Menampilkan teks (terpotong atau tidak)
    echo $text;
}

// Inisialisasi string panjang untuk teks
$kata = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus veritatis adipisci incidunt, iure dicta autem! Aperiam nulla exercitationem, reiciendis eum voluptates asperiores veniam delectus similique, officia commodi, dolor animi inventore!";

// Menampilkan kalimat awal dengan format tebal
echo "<b>Kalimat awal : </b> " . $kata . "</br>";

// Memanggil fungsi wrapText untuk menampilkan teks yang telah diproses
wrapText($kata);

?>
