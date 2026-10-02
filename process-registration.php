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

/* Harga kursus sesuai katalog */
$coursePrices = [
    'Web Dasar' => 200000,
    'PHP Dasar' => 250000,
    'PHP Lanjutan' => 300000,
    'Laravel Fundamental' => 350000,
    'MySQL Dasar' => 275000,
    'UI Web Dasar' => 225000
];

$coursePrice = $coursePrices[$course] ?? 0;

/* Diskon berdasarkan jenis peserta */
$discountPercent = match ($participantType) {
    'Mahasiswa' => 10,
    'Guru' => 15,
    'Umum' => 5,
    default => 0
};

$discount = $coursePrice * $discountPercent / 100;
$total = $coursePrice - $discount;

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

        <a class="brand" href="index.php">
            KursusKu
        </a>

        <nav aria-label="Navigasi utama">
            <a href="index.php">Beranda</a>
            <a href="index.php#katalog">Katalog</a>
            <a href="registration.php">Daftar</a>
        </nav>

    </div>

</header>

<main class="container">

    <section class="page-intro">

        <p class="eyebrow">
            Hasil Pendaftaran
        </p>

        <h1>
            Data Pendaftaran Kursus
        </h1>

    </section>

    <section class="form-card">

        <p>
            <strong>Nama:</strong>
            <?= e($name) ?>
        </p>

        <p>
            <strong>Email:</strong>
            <?= e($email) ?>
        </p>

        <p>
            <strong>Nomor HP:</strong>
            <?= e($phone) ?>
        </p>

        <p>
            <strong>Program Studi:</strong>
            <?= e($studyProgram) ?>
        </p>

        <p>
            <strong>Kursus:</strong>
            <?= e($course) ?>
        </p>

        <p>
            <strong>Jenis Peserta:</strong>
            <?= e($participantType) ?>
        </p>

        <p>
            <strong>Minat Belajar:</strong>
            <?= e($interestText) ?>
        </p>

        <p>
            <strong>Catatan:</strong>
            <?= e($note) ?>
        </p>

        <p>
            <strong>Source:</strong>
            <?= e($source) ?>
        </p>

        <hr>

        <h2>Ringkasan Biaya</h2>

        <p>
            <strong>Harga Kursus:</strong>
            Rp <?= number_format($coursePrice, 0, ',', '.') ?>
        </p>

        <p>
            <strong>Jenis Peserta:</strong>
            <?= e($participantType) ?>
        </p>

        <p>
            <strong>Diskon:</strong>
            <?= $discountPercent ?>%
        </p>

        <p>
            <strong>Jumlah Diskon:</strong>
            Rp <?= number_format($discount, 0, ',', '.') ?>
        </p>

        <p>
            <strong>Total Biaya:</strong>
            Rp <?= number_format($total, 0, ',', '.') ?>
        </p>

    </section>

</main>

</body>
</html>