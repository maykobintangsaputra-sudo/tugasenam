<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas Segitiga (GET)</title>
</head>
<body>
    <h2>Hitung Luas Segitiga</h2>

    <!-- Form input alas dan tinggi -->
    <form method="get" action="">
        <label>Alas: </label>
        <input type="number" name="alas" required><br><br>

        <label>Tinggi: </label>
        <input type="number" name="tinggi" required><br><br>

        <input type="submit" value="Hitung">
    </form>
    <hr>

    <?php
    // Cek apakah parameter sudah dikirim lewat GET
    if (isset($_GET['alas']) && isset($_GET['tinggi'])) {
        $alas = $_GET['alas'];
        $tinggi = $_GET['tinggi'];

        // Rumus luas segitiga
        
        $luas = 0.5 * $alas * $tinggi;

        echo "Alas: $alas <br>";
        echo "Tinggi: $tinggi <br>";
        echo "<b>Luas Segitiga = $luas</b>";
    } else {
        echo "Silakan masukkan nilai alas dan tinggi pada form di atas.";
    }
    ?>
</body>
</html>