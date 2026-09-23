<?php

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$studyProgram = $_POST['studyProgram'] ?? '';
$course = $_POST['course'] ?? '';
$participantType = $_POST['participantType'] ?? '';
$interest = $_POST['interest'] ?? [];
$note = $_POST['note'] ?? '';
$source = $_POST['source'] ?? '';

if (!is_array($interest)) {
    $interest = [$interest];
}

$interestText = $interest
    ? implode(', ', $interest)
    : 'Tidak ada pilihan';

?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hasil Pendaftaran - KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<header class="site-header">
    <div class="container nav-wrap">
        <a class="brand" href="index.php">KursusKu</a>

        <nav aria-label="Navigasi utama">
            <a href="index.php">Beranda</a>
            <a href="index.php#katalog">Katalog</a>
            <a href="registration.php">Daftar</a>
        </nav>
    </div>
</header>

<main class="container">

    <section class="page-intro">
        <p class="eyebrow">Hasil Pendaftaran</p>

        <h1>Data Pendaftaran Kursus</h1>
    </section>

    <section class="form-card">

        <p><strong>Nama:</strong> <?= e($name) ?></p>

        <p><strong>Email:</strong> <?= e($email) ?></p>

        <p><strong>Nomor HP:</strong> <?= e($phone) ?></p>

        <p><strong>Program Studi:</strong> <?= e($studyProgram) ?></p>

        <p><strong>Kursus:</strong> <?= e($course) ?></p>

        <p><strong>Jenis Peserta:</strong> <?= e($participantType) ?></p>

        <p><strong>Minat Belajar:</strong> <?= e($interestText) ?></p>

        <p><strong>Catatan:</strong> <?= e($note) ?></p>

        <p><strong>Source:</strong> <?= e($source) ?></p>

    </section>

</main>

</body>
</html>