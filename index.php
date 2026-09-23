<?php
require_once __DIR__ . '/helpers.php';

$siteName = 'KursusKu';
$tagline = 'Belajar, daftar, dan kelola kursus dalam satu tempat.';
$year = date('Y');

$courses = [
    ['code' => 'WEB-01', 'name' => 'Web Dasar', 'fee' => 200000, 'quota' => 30, 'registered' => 12, 'start_date' => '2026-09-21'],
    ['code' => 'PHP-01', 'name' => 'PHP Dasar', 'fee' => 250000, 'quota' => 30, 'registered' => 18, 'start_date' => '2026-09-22'],
    ['code' => 'PHP-02', 'name' => 'PHP Lanjutan', 'fee' => 300000, 'quota' => 25, 'registered' => 24, 'start_date' => '2026-09-24'],
    ['code' => 'LAR-01', 'name' => 'Laravel Fundamental', 'fee' => 350000, 'quota' => 25, 'registered' => 25, 'start_date' => '2026-09-28'],
    ['code' => 'DB-01', 'name' => 'MySQL Dasar', 'fee' => 275000, 'quota' => 20, 'registered' => 0, 'start_date' => '2026-10-01'],
    ['code' => 'UI-01', 'name' => 'UI Web Dasar', 'fee' => 225000, 'quota' => 35, 'registered' => 9, 'start_date' => '2026-10-03'],
];
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($siteName) ?></title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<header class="site-header">
    <div class="container nav-wrap">

        <a class="brand" href="index.php">
            <?= htmlspecialchars($siteName) ?>
        </a>

        <nav aria-label="Navigasi utama">
            <a href="#keunggulan">Keunggulan</a>
            <a href="#katalog">Katalog</a>
            <a href="#alur">Cara Daftar</a>
            <a href="#kontak">Kontak</a>
            <a href="registration.php">Daftar Kursus</a>
        </nav>

    </div>
</header>


<main>

    <!-- HERO -->
    <section class="hero">
        <div class="container hero-content">

            <div class="hero-text">
                <p class="eyebrow">Platform Belajar Online</p>

                <h1><?= htmlspecialchars($siteName) ?></h1>

                <p class="hero-description">
                    <?= htmlspecialchars($tagline) ?>
                </p>

                <a class="hero-button" href="registration.php">
                    Daftar Kursus Sekarang
                </a>
            </div>

            <div class="hero-image">
                <img
                    src="assets/images/hero-kursus.jpg"
                    alt="Mahasiswa sedang mengikuti kegiatan kursus komputer"
                >
            </div>

        </div>
    </section>


    <!-- KEUNGGULAN -->
<section id="keunggulan" class="section">
    <div class="container">

        <p class="eyebrow">Keunggulan</p>

        <h2>Mengapa Memilih KursusKu?</h2>

        <div class="table-wrapper">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Keunggulan</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Materi Terarah</td>
                        <td>
                            Materi pembelajaran disusun secara terstruktur
                            dan mudah diikuti.
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Belajar dengan Proyek</td>
                        <td>
                            Peserta belajar melalui latihan dan proyek
                            yang dapat dipraktikkan.
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Pendampingan Praktik</td>
                        <td>
                            Peserta mendapatkan arahan untuk membantu
                            memahami praktik pembelajaran.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>

    <!-- KATALOG -->
<section id="katalog" class="section section-soft">
    <div class="container">

        <p class="eyebrow">Pilihan Kursus</p>

        <h2>Katalog Kursus</h2>

        <div class="table-wrapper">
            <table class="content-table">

                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama Kursus</th>
                        <th>Biaya</th>
                        <th>Status</th>
                        <th>Sisa Kursi</th>
                        <th>Mulai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($courses as $course): ?>

                        <tr>
                            <td>
                                <?= htmlspecialchars($course['code']) ?>
                            </td>

                            <td>
                                <strong>
                                    <?= htmlspecialchars($course['name']) ?>
                                </strong>
                            </td>

                            <td>
                                <?= rupiah($course['fee']) ?>
                            </td>

                            <td>
                                <?= statusKursus(
                                    $course['quota'],
                                    $course['registered']
                                ) ?>
                            </td>

                            <td>
                                <?= sisaKursi(
                                    $course['quota'],
                                    $course['registered']
                                ) ?>
                            </td>

                            <td>
                                <?= formatTanggal($course['start_date']) ?>
                            </td>

                            <td>

                                <?php if (
                                    statusKursus(
                                        $course['quota'],
                                        $course['registered']
                                    ) === 'Tersedia'
                                ): ?>

                                    <a
                                        class="table-button"
                                        href="registration.php"
                                    >
                                        Daftar
                                    </a>

                                <?php else: ?>

                                    <span class="table-full">
                                        Penuh
                                    </span>

                                <?php endif; ?>

                            </td>
                        </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>

    </div>
</section>

    <!-- CARA DAFTAR -->
<section id="alur" class="section">
    <div class="container">

        <p class="eyebrow">Cara Mendaftar</p>

        <h2>Langkah Pendaftaran</h2>

        <div class="table-wrapper">
            <table class="content-table">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Langkah</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Pilih Kursus</td>
                        <td>
                            Pilih kursus yang sesuai dengan minat belajar.
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Isi Form</td>
                        <td>
                            Lengkapi form pendaftaran dengan data yang diperlukan.
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Periksa Data</td>
                        <td>
                            Periksa kembali data sebelum mengirim pendaftaran.
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Kirim Pendaftaran</td>
                        <td>
                            Kirim pendaftaran dan tunggu konfirmasi.
                        </td>
                    </tr>

                </tbody>

            </table>
        </div>

    </div>
</section>


    <!-- MEDIA -->
    <section id="media" class="section section-soft">
        <div class="container">

            <p class="eyebrow">Kenali Program Kami</p>

            <h2>Media Pembelajaran</h2>

            <div class="media-card">

                <img
                    src="assets/images/hero-kursus.jpg"
                    alt="Mahasiswa sedang mengikuti kegiatan kursus komputer"
                >

                <h3>Video Singkat</h3>

                <video controls>
                    <source
                        src="assets/video/intro-kursus.mp4"
                        type="video/mp4"
                    >

                    Browser Anda tidak mendukung video HTML5.
                </video>

                <p>
                    Pelajari juga
                    <a
                        href="https://www.php.net/"
                        target="_blank"
                        rel="noopener"
                    >
                        dokumentasi PHP
                    </a>.
                </p>

            </div>

        </div>
    </section>


    <!-- KONTAK -->
    <section id="kontak" class="section contact-section">
        <div class="container">

            <p class="eyebrow">Hubungi Kami</p>

            <h2>Kontak</h2>

            <p>
                Email: kursusku@example.test
            </p>

            <p>
                Alamat: Laboratorium Komputer - data latihan
            </p>

        </div>
    </section>

</main>


<footer class="site-footer">
    <div class="container">
        <small>
            &copy; <?= $year ?>
            <?= htmlspecialchars($siteName) ?>
        </small>
    </div>
</footer>

</body>
</html>