<?php

require_once __DIR__ . '/helpers.php';

function test(string $name, bool $condition): void
{
    echo $condition ? "PASS - $name<br>" : "FAIL - $name<br>";
}

test(
    'rupiah()',
    rupiah(350000) === 'Rp 350.000'
);

test(
    'statusKursus() Penuh',
    statusKursus(25, 25) === 'Penuh'
);

test(
    'statusKursus() Tersedia',
    statusKursus(30, 12) === 'Tersedia'
);

test(
    'sisaKursi()',
    sisaKursi(30, 12) === 18
);

test(
    'sisaKursi() tidak negatif',
    sisaKursi(20, 25) === 0
);

test(
    'formatTanggal()',
    formatTanggal('2026-09-21') === '21-09-2026'
);