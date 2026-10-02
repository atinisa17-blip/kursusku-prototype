# AI Usage Log - Pertemuan 6

| Masalah/tujuan | Saran AI | Keputusan | Hasil uji |
|---|---|---|---|
| Branching diskon | Pisahkan perhitungan diskon berdasarkan jenis peserta | Diterima | Mahasiswa 10%, guru 15%, umum 5% |
| Checkbox kosong | Gunakan `$_POST['interest'] ?? []` dan validasi array | Diterima | Tidak ada warning saat minat kosong |
| Pilihan kursus | Gunakan array untuk daftar kursus dan tampilkan dengan `foreach` | Diterima | Semua kursus tampil pada pilihan kursus |
| History dummy | Render data history dari array menggunakan `foreach` | Diterima | Data history tampil tanpa database/CRUD |
| Test Matrix | Buat tabel pengujian dengan skenario, actual, expected, dan status | Diterima | Semua pengujian tercatat dengan status PASS |