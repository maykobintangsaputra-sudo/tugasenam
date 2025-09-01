<?php
if (isset($_GET['sisi'])) {
    $sisi = $_GET['sisi'];

    // Rumus volume kubus = sisi³
    $volume = pow($sisi, 3);

    echo "Sisi kubus: " . $sisi . "<br>";
    echo "Volume kubus: " . $volume;
} else {
    echo "Silakan masukkan nilai sisi kubus melalui URL.<br>";
    echo "Contoh: ?sisi=5";
}
?>