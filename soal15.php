<?php 
$kata = ''; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $kata = isset($_POST['kata']) ? $_POST['kata'] : '';
    
    $total_karakter = strlen($kata);
    $kata = ''; 
} else {
    $total_karakter = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Karakter</title>
    <h1>Hitung Total Karakter dalam String</h1>
</head>
<body>
    <form method="post">
        <label for="kata">Masukkan string: </label>
        <input type="text" name="kata" id="kata" value="<?= htmlspecialchars($kata) ?>">
        <button type="submit">Hitung</button>
        <p>Total karakter: <?php echo isset($total_karakter) ? $total_karakter : ''; ?></p>
    </form>
</body>
</html>
