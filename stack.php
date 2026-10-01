<?php

$stack = ["Data 1", "Data 2", "Data 3"];

if (isset($_POST["push"])) {

    $data = trim($_POST["data"]);

    if ($data != "") {
        $stack[] = $data;
    }
}

if (isset($_POST["pop"])) {

    if (!empty($stack)) {
        array_pop($stack);
    }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Simulasi Stack</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <a href="index.php" class="back">
        ← Kembali ke Beranda
    </a>

    <h1>Simulasi Stack</h1>

    <p>
        Stack adalah struktur data yang menggunakan konsep
        <strong>LIFO (Last In, First Out)</strong>.
        Data yang terakhir masuk akan menjadi data pertama yang keluar.
    </p>

    <form method="POST">

        <input
            type="text"
            name="data"
            placeholder="Masukkan data..."
        >

        <button type="submit" name="push">
            Push
        </button>

        <button type="submit" name="pop">
            Pop
        </button>

    </form>

    <h2>Isi Stack</h2>

    <div class="stack">

        <?php foreach (array_reverse($stack) as $data): ?>

            <div class="stack-item">
                <?= htmlspecialchars($data) ?>
            </div>

        <?php endforeach; ?>

    </div>

    <div class="info">

        <strong>Konsep LIFO:</strong>

        Data yang terakhir ditambahkan akan keluar
        terlebih dahulu ketika tombol <strong>Pop</strong> ditekan.

    </div>

</div>

</body>

</html>