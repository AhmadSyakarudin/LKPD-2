<?php 

// Loop pertama untuk baris(ke samping)
for($i = 1; $i < 10; $i++) {
    // Loop kedua untuk kolom(ke bawah)
    for($j = 0; $j < 8  ; $j++) {
        // Cek apakah nilai $i habis dibagi 5
        if ($i % 5 == 0) {
            // Jika iya, tidak mencetak apa-apa
            echo "";
        } else {
            // Jika tidak, akan mencetak bintang "*"
            echo "*";
        }
    }   
    // Setelah selesai mencetak kolom, mencetak baris baru
    echo "<br>";
}

?>
