<?php

class Node
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList
{
    public $head = null;

    public function tambah($data)
    {
        $nodeBaru = new Node($data);

        if ($this->head === null) {
            $this->head = $nodeBaru;
            return;
        }

        $current = $this->head;

        while ($current->next !== null) {
            $current = $current->next;
        }

        $current->next = $nodeBaru;
    }
}

$list = new LinkedList();

$list->tambah("Node 1");
$list->tambah("Node 2");
$list->tambah("Node 3");

if (isset($_POST["tambah"])) {

    $data = trim($_POST["data"]);

    if ($data != "") {
        $list->tambah($data);
    }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Simulasi Linked List</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <a href="index.php" class="back">
        ← Kembali ke Beranda
    </a>

    <h1>Simulasi Linked List</h1>

    <p>
        Linked List terdiri dari beberapa node yang saling
        terhubung. Setiap node mempunyai data dan hubungan
        menuju node berikutnya.
    </p>

    <form method="POST">

        <input
            type="text"
            name="data"
            placeholder="Masukkan node..."
            required
        >

        <button type="submit" name="tambah">
            Tambah Node
        </button>

    </form>

    <h2>Struktur Linked List</h2>

    <div class="linked">

        <?php

        $current = $list->head;

        while ($current !== null):

        ?>

            <div class="node">

                <?= htmlspecialchars($current->data) ?>

            </div>

            <?php if ($current->next !== null): ?>

                <span class="arrow">→</span>

            <?php endif; ?>

        <?php

            $current = $current->next;

        endwhile;

        ?>

        <span class="arrow">→</span>

        <div class="node">
            NULL
        </div>

    </div>

</div>

</body>

</html>