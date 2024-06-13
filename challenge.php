<!DOCTYPE html>
<html>
<head>
    <title>PRAKTIKUM 10</title>
</head>
<body>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nama: <input type="text" name="nama"><br>
        Masukkan Angka Pertama (1-10): <input type="number" name="angka1"><br>
        Masukkan Angka Kedua(1-10): <input type="number" name="angka2"><br>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['hitung'])) {
        $nama = $_POST['nama'];
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];

        echo "<h3>Hasil dari semua operasi aritmatika:</h3>";
        echo "<p>Halo, $nama!</p>";
        echo "<p>$angka1 + $angka2 = " . ($angka1 + $angka2) . "</p>";
        echo "<p>$angka1 - $angka2 = " . ($angka1 - $angka2) . "</p>";
        echo "<p>$angka1 x $angka2 = " . ($angka1 * $angka2) . "</p>";
        if ($angka2 != 0) {
            echo "<p>$angka1 / $angka2 = " . ($angka1 / $angka2) . "</p>";
        } else {
            echo "<p>Error! Pembagian dengan nol tidak diperbolehkan.</p>";
        }
    }
    ?>

</body>
</html>
