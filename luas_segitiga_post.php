<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas Segitiga</title>
</head>
<body>
    <h2>Form Hitung Luas Segitiga</h2>
    <form method="post" action="">
        Alas : <input type="number" name="alas" required><br><br>
        Tinggi : <input type="number" name="tinggi" required><br><br>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];

        $luas = 0.5 * $alas * $tinggi;

        echo "<h3>Hasil Perhitungan:</h3>";
        echo "Alas = $alas <br>";
        echo "Tinggi = $tinggi <br>";
        echo "Luas Segitiga = " . $luas;
    }
    ?>
</body>
</html>