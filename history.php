<?php

declare(strict_types=1);

require __DIR__ . '/helpers.php';

$registrations = [
    ['name' => 'Ati Nisa', 'course' => 'PHP Dasar', 'total' => 225000],
    ['name' => 'Bima Saputra', 'course' => 'Web Dasar', 'total' => 180000],
    ['name' => 'Citra Rahma', 'course' => 'Laravel Fundamental', 'total' => 297500],
    ['name' => 'Dani Akbar', 'course' => 'MySQL Dasar', 'total' => 261250],
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
<body class="utility-page">
<main class="utility-card wide-card">
    <span class="eyebrow">MILESTONE 6 · FOREACH</span>
    <h1>History Pendaftaran Dummy</h1>
    <p>Data ini adalah latihan array + looping, bukan database dan bukan CRUD.</p>

    <div class="table-wrap">
        <table class="course-table compact-table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Kursus</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registrations as $index => $item): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= e($item['name']) ?></td>
                        <td><?= e($item['course']) ?></td>
                        <td><?= formatRupiah($item['total']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="button-row">
        <a class="button" href="registration.php">Daftar Kursus</a>
        <a class="button button-secondary" href="index.php">Beranda</a>
    </div>
</main>
</body>
</html>
