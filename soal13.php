<?php 
    if (isset($_POST['kirim'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $aksi = $_POST['aksi'];
        switch ($aksi) {
            case 'tambah':
                $output = $bil1 + $bil2;
                break;
            case 'kurang':
                $output = $bil1 - $bil2;
                break;
            case 'kali':
                $output = $bil1 * $bil2;
                break;
            case 'bagi':
                $output = $bil1 / $bil2;
                break;            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <div class="container mt-5">
        <form method="POST" class="p-4 border rounded">
            <h1 class="mb-4">Kalkulator Sederhana</h1>
            <div class="mb-3">
                <label for="bil1" class="form-label">Bilangan Pertama:</label>
                <input type="number" class="form-control" name="bil1" placeholder="Masukkan bilangan pertama" id="bil1" required>
            </div>
            <div class="mb-3">
                <label for="bil2" class="form-label">Bilangan Kedua:</label>
                <input type="number" class="form-control" name="bil2" placeholder="Masukkan bilangan kedua" id="bil2" required>
            </div>
            <div class="mb-3">
                <label for="aksi" class="form-label">Aksi:</label>
                <select class="form-select" name="aksi" id="aksi" required>
                    <option value="tambah">Penjumlahan</option>
                    <option value="kurang">Pengurangan</option>
                    <option value="kali">Perkalian</option>
                    <option value="bagi">Pembagian</option>
                </select>
            </div>
            <button type="submit" name="kirim" class="btn btn-primary">Hitung</button>
            <hr>
            <div class="mt-3">
                <p class="fw-bold">Hasil: <?php echo isset($output) ? $output : ''; ?></p>
            </div>
        </form>
    </div>
</body>
</html>
