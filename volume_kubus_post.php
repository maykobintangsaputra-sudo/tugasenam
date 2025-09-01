<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['sisi'])) {
        $sisi = $_POST['sisi'];

        // Rumus volume kubus = sisi³
        $volume = pow($sisi, 3);

        echo "Sisi kubus: " . $sisi . "<br>";
        echo "Volume kubus: " . $volume;
    } else {
        echo "Mohon masukkan nilai sisi kubus.";
    }
} else {
?>
    <form method="post" action="">
        Masukkan panjang sisi kubus: <input type="number" name="sisi" required>
        <input type="submit" value="Hitung Volume">
    </form>
<?php
}
?>