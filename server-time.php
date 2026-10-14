
<?php

$serverTime = date('H:i:s');
$serverDate = date('d-m-Y');

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waktu Server - KursusKu</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="utility-page">

    <main class="server-time-card">
        <h1>Waktu Server</h1>

        <p class="time-label">Waktu saat ini berdasarkan server</p>

        <div class="time-value">
            <?= htmlspecialchars($serverTime) ?>
        </div>

        <p class="date-value">
            Tanggal: <?= htmlspecialchars($serverDate) ?>
        </p>

        <div class="button-row">
            <a href="index.php" class="button">Kembali ke Beranda</a>
        </div>
    </main>

</body>
</html>
