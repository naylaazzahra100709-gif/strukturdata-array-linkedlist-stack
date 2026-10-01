<?php
$array = ["Apel", "Mangga", "Jeruk"];

if (isset($_POST["tambah"])) {
    $data = trim($_POST["data"]);

    if ($data != "") {
        $array[] = $data;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Simulasi Array</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <a href="index.php" class="back">← Kembali ke Beranda</a>

    <h1>Simulasi Array</h1>

    <p>
        Array menyimpan beberapa data berdasarkan indeks.
        Indeks array dimulai dari angka 0.
    </p>

    <form method="POST">

        <input
            type="text"
            name="data"
            placeholder="Masukkan data..."
            required
        >

        <button type="submit" name="tambah">
            Tambah Data
        </button>

    </form>

    <h2>Isi Array</h2>

    <div class="data">

        <?php foreach ($array as $index => $nilai): ?>

            <div class="item">
                <strong>Index [<?= $index ?>]</strong>

                <span>
                    <?= htmlspecialchars($nilai) ?>
                </span>
            </div>

        <?php endforeach; ?>

    </div>

</div>

</body>
</html>