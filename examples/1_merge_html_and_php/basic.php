<?php
    //  Ini komentar
    /*  Ini komentar tapi bisa
        bisa lebih dari 1 baris
    */

    // Contoh variable
    $nama = "Marvin";
    $umur = 25;
    $berat_badan = 73.5;

    // Contoh array
    $nilai_harian = array(85, 90, 95);
    $nilai_pas = array(
        "matematika" => 90,
        "inggris" => 75,
        "pjok" => 80
    );
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Nama saya <?php echo $nama; ?>
    <br>
    <?php echo "Umur saya $umur"; ?>
    <br>
    <?php echo "Berat badan saya " .  $berat_badan; ?>
    <br>
    Nilai harian ke-1 <?php echo $nilai_harian[0]; ?>
    <br>
    Nilai PAS Inggris <?= $nilai_pas["inggris"] ?>
    <!-- Cara pakai include -->
    <?php include("tambahan.php"); ?>
</body>
</html>