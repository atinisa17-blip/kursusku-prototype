<?php

$tests = [
    [
        'scenario' => 'Mahasiswa, PHP Dasar',
        'actual' => 'Rp 225.000',
        'expected' => 'Rp 225.000',
        'status' => 'PASS'
    ],
    [
        'scenario' => 'Guru, PHP Dasar',
        'actual' => 'Rp 212.500',
        'expected' => 'Rp 212.500',
        'status' => 'PASS'
    ],
    [
        'scenario' => 'Umum, PHP Dasar',
        'actual' => 'Rp 237.500',
        'expected' => 'Rp 237.500',
        'status' => 'PASS'
    ],
    [
        'scenario' => '3 minat dipilih',
        'actual' => 'Web Development, Programming, Database',
        'expected' => 'Semua minat tampil',
        'status' => 'PASS'
    ],
    [
        'scenario' => 'Minat kosong',
        'actual' => 'Tidak ada pilihan',
        'expected' => 'Tidak ada pilihan',
        'status' => 'PASS'
    ],
    [
        'scenario' => 'Nama kosong',
        'actual' => 'Nama wajib diisi',
        'expected' => 'Nama wajib diisi',
        'status' => 'PASS'
    ],
    [
        'scenario' => 'Email tidak valid',
        'actual' => 'Email tidak valid',
        'expected' => 'Email tidak valid',
        'status' => 'PASS'
    ],
    [
        'scenario' => 'Pilih kursus',
        'actual' => 'Laravel Fundamental',
        'expected' => 'Laravel Fundamental',
        'status' => 'PASS'
    ],
    [
        'scenario' => 'History dummy',
        'actual' => 'Data tampil dari array',
        'expected' => 'Data tampil menggunakan foreach',
        'status' => 'PASS'
    ],
    [
        'scenario' => 'Source hidden',
        'actual' => 'week-05',
        'expected' => 'week-05',
        'status' => 'PASS'
    ]
];

?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test Matrix Pertemuan 6 - KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<main class="container">

    <section class="page-intro">

        <p class="eyebrow">
            Milestone 6 • Test
        </p>

        <h1>
            Test Matrix Pertemuan 6
        </h1>

    </section>

    <section class="form-card">

        <table>

            <thead>
                <tr>
                    <th>NO</th>
                    <th>SKENARIO</th>
                    <th>ACTUAL</th>
                    <th>EXPECTED</th>
                    <th>STATUS</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($tests as $index => $test): ?>

                    <tr>

                        <td>
                            <?= $index + 1 ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($test['scenario']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($test['actual']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($test['expected']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($test['status']) ?>
                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </section>

</main>

</body>
</html>