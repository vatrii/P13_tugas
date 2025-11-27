<?php
$nama = "Website Wisata Sederhana";
$wisata = ["Borobudur", "Kuta", "TMII", "Jakarta"];
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $nama ?></title>
</head>
<body>

<h1><?= $nama ?></h1>

<h3>Daftar Tempat Wisata:</h3>
<ul>
    <?php foreach ($wisata as $w) : ?>
        <li><?= $w ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>
