<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Kursus - KursusKu</title>
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
        <p class="eyebrow">Pendaftaran Kursus</p>

        <h1>Mulai belajar bersama KursusKu</h1>

        <p>Lengkapi form berikut dengan data latihan.</p>
    </section>

    <section class="form-card">

        <form action="process-registration.php" method="post">
            <!-- Nama -->
            <div>
                <label for="name">Nama Lengkap</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    required
                    minlength="3"
                >
            </div>

            <!-- Email -->
            <div>
                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    required
                >
            </div>

            <!-- Nomor HP -->
            <div>
                <label for="phone">Nomor HP</label>
                <input
                    type="tel"
                    id="phone"
                    name="phone"
                    required
                >
            </div>

            <!-- Program Studi -->
            <div>
                <label for="studyProgram">Program Studi</label>
                <input
                    type="text"
                    id="studyProgram"
                    name="studyProgram"
                    required
                >
            </div>

            <!-- Pilihan Kursus -->
            <div>
                <label for="course">Pilih Kursus</label>

                <select id="course" name="course" required>
                    <option value="">-- Pilih Kursus --</option>
                    <option value="HTML & CSS Dasar">HTML & CSS Dasar</option>
                    <option value="JavaScript Dasar">JavaScript Dasar</option>
                    <option value="PHP Dasar">PHP Dasar</option>
                    <option value="Laravel Fundamental">Laravel Fundamental</option>
                </select>
            </div>

            <!-- Jenis Peserta -->
            <fieldset>
                <legend>Jenis Peserta</legend>

                <label>
                    <input
                        type="radio"
                        name="participantType"
                        value="Mahasiswa"
                        required
                    >
                    Mahasiswa
                </label>

                <label>
                    <input
                        type="radio"
                        name="participantType"
                        value="Umum"
                    >
                    Umum
                </label>
            </fieldset>

            <!-- Minat Belajar -->
            <fieldset>
                <legend>Minat Belajar</legend>

                <label>
                    <input
                        type="checkbox"
                        name="interest[]"
                        value="Web Development"
                    >
                    Web Development
                </label>

                <label>
                    <input
                        type="checkbox"
                        name="interest[]"
                        value="Programming"
                    >
                    Programming
                </label>

                <label>
                    <input
                        type="checkbox"
                        name="interest[]"
                        value="Database"
                    >
                    Database
                </label>
            </fieldset>

            <!-- Catatan -->
            <div>
                <label for="note">Catatan Tambahan</label>

                <textarea
                    id="note"
                    name="note"
                    rows="5"
                    placeholder="Tulis catatan jika ada..."
                ></textarea>
            </div>

            <!-- Hidden -->
            <input
                type="hidden"
                name="source"
                value="week-05"
            >

            <!-- Tombol -->
            <button type="submit">
                Daftar Sekarang
            </button>

        </form>

    </section>

</main>

</body>
</html>