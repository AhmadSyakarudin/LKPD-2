<?php 

$angka = isset($_POST['angka']) ? $_POST['angka'] : 0;
$hasil = "";

function isPrima($n) {
    if ($n <= 1) return false;

    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }

    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (is_numeric($angka)) {
        if (isPrima($angka)) {
            $prima = "$angka adalah bilangan prima";
        } else {
            $prima = "$angka bukan bilangan prima";
        }
    }
    $angka = ''; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>Menentukan Bilangan Prima</h1>
</head>
<body>
    <form method="post">
        <label for="angka">Masukkan angka: </label>
        <input type="text" name="angka" id="angka" value="<?= htmlspecialchars($angka) ?>">
        <button type="submit">Submit</button>
        <p><?php echo isset($prima) ? $prima : ''; ?></p>
    </form>
</body>
</html>
