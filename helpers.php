<?php

declare(strict_types=1);

function rupiah(int $amount): string
{
    return 'Rp ' . number_format($amount, 0, ',', '.');
}

function formatRupiah(int $amount): string
{
    return rupiah($amount);
}

function statusKursus(int $quota, int $registered): string
{
    return $registered >= $quota ? 'Penuh' : 'Tersedia';
}

function sisaKursi(int $quota, int $registered): int
{
    return max(0, $quota - $registered);
}

function formatTanggal(string $date): string
{
    $value = new DateTimeImmutable($date);
    return $value->format('d-m-Y');
}

function e(mixed $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function findCourse(array $courses, string $code): ?array
{
    foreach ($courses as $course) {
        if (($course['code'] ?? '') === $code) {
            return $course;
        }
    }

    return null;
}

function getDiscountPercent(string $participantType): int
{
    if ($participantType === 'mahasiswa') {
        return 20;
    } elseif ($participantType === 'guru') {
        return 15;
    }

    return 0;
}


function getLearningModeLabel(string $mode): string
{
    switch ($mode) {
        case 'offline':
            return 'Tatap Muka';
        case 'online':
            return 'Online';
        case 'hybrid':
            return 'Hybrid';
        default:
            return 'Tidak diketahui';
    }
}

echo "<div style='background:#fce4ec; color:#c2185b; padding:30px; margin:30px auto; max-width:400px; text-align:center; border-radius:20px; font-family:Arial;'>";
echo "<h2>🌸 Hasil Format Tanggal</h2>";
echo "<h1>" . formatTanggal("2026-09-15") . "</h1>";
echo "</div>";
