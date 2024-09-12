<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- mengirim data ke server web untuk diproses -->
<form method="POST">
    <label for="teks">Masukkan Teks:</label>
    <!-- required, menandai bahwa kolom wajib diisi -->
    <input type="text" id="teks" name="teks" required>
    <button type="submit">Cek Karakter</button>
</form>

<?php 

    // buat ngecek request apakah menggunakan metode GET atau POST
    //== fungsinya menyamakan jika dalam php adalah method post, maka diatas juga harus post(huruf besar dan kecil juga ngaruh)
    //$_SERVER adalah array yang berisikan informasi yang diterima oleh server
    //request method adalah permintaan yang menggunakan method
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mengambil value/teks yang dikirimkan melalui form dengan metode POST(didapat dari name)
            $teks = $_POST['teks'];
            //preg_match_all adalah method untuk mencari semua kemunculan dari sebuah pola dalam sebuah teks
            // Menggunakan regex(regular exspretion) untuk mencari karakter yang kita cantumkan, contoh: (a-z, A-Z), angka (1-9), atau spasi, tanda ^buat mengeliminasi karakter yang dicari, & buat mencamtumkan karakter yang dicari
            //$teks digunakan untuk memasukkan nilai yang ada di dalam post teks
            // $matches digunakan untuk menampung karakter yang ditemukan
        preg_match_all('/[^a-zA-Z\s1-9]/', $teks, $matches);
            // Mengecek apakah ada karakter yang ditemukan atau tidak
            // count() digunakan untuk menghitung jumlah kemunculan karakter
            //[0] digunakan untuk kemunculan pertama
        if(count($matches[0]) > 0) {
            //array_unique digunakan untuk menghilangkan karakter yang sama(kemunculan hanya 1 kali)
            // $matches[0] digunakan untuk menampung karakter
            $uniqueSymbols = array_unique($matches[0]);
            // implode digunakan untuk menggabungkan karakter
            // $uniqueSymbols digunakan untuk menampung karakter
            echo "Karakter yang terdapat pada kalimat : " . implode(', ', $uniqueSymbols);
        }else { 
            echo "Tidak ada karakter yang terdapat pada kalimat";
        }
    
        }
?>

</body>
</html>