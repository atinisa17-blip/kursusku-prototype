<?php

$history = [
    [
        'name' => 'Ati Nisa',
        'course' => 'PHP Dasar',
        'total' => 225000
    ],
    [
        'name' => 'Bima Saputra',
        'course' => 'Web Dasar',
        'total' => 180000
    ],
    [
        'name' => 'Citra Rahma',
        'course' => 'Laravel Fundamental',
        'total' => 297500
    ],
    [
        'name' => 'Dani Akbar',
        'course' => 'MySQL Dasar',
        'total' => 261250
    ]
];

?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>History Pendaftaran - KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<main class="container">

    <section class="page-intro">

        <p class="eyebrow">
            Milestone 6 • Foreach
        </p>

        <h1>
            History Pendaftaran Dummy
        </h1>

        <p>
            Data ini adalah latihan array + looping, bukan database dan bukan CRUD.
        </p>

    </section>

    <section class="form-card">

        <table>

            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Kursus</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($history as $index => $data): ?>

                    <tr>

                        <td>
                            <?= $index + 1 ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($data['name']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($data['course']) ?>
                        </td>

                        <td>
                            Rp <?= number_format($data['total'], 0, ',', '.') ?>
                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

        <div style="margin-top: 20px;">

            <a href="registration.php">
                Daftar Kursus
            </a>

            <a href="index.php">
                Beranda
            </a>

        </div>

    </section>

</main>

</body>
</html>