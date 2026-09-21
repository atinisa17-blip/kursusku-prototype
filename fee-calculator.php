<?php

$courseName = 'Laravel Fundamental';
$fee = 350000;
$participantCount = 2;
$discountPercent = 10;
$adminFee = 25000;
$isActive = true;

$subtotal = $fee * $participantCount;
$discount = intdiv($subtotal * $discountPercent, 100);
$total = $subtotal - $discount + $adminFee;

echo 'Nama kursus: ' . $courseName . '<br>';
echo 'Biaya kursus: Rp ' . number_format($fee, 0, ',', '.') . '<br>';
echo 'Jumlah peserta: ' . $participantCount . '<br>';
echo 'Subtotal: Rp ' . number_format($subtotal, 0, ',', '.') . '<br>';
echo 'Diskon: Rp ' . number_format($discount, 0, ',', '.') . '<br>';
echo 'Biaya admin: Rp ' . number_format($adminFee, 0, ',', '.') . '<br>';
echo 'Total: Rp ' . number_format($total, 0, ',', '.');

?>