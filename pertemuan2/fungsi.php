<?php
// ====== FUNGSI ======
// Kita bisa "menjamin" jenis parameter dengan type hinting
// dan jenis nilai balik dengan ": float".
function hitungIPK(array $nilai): float {
 // array_sum menjumlahkan semua elemen, count menghitung banyaknya.
 return array_sum($nilai) / count($nilai);
}
function sapaSeseorang(string $nama): string {
 return "Salam, $nama!";
}
echo hitungIPK([3.9, 4.0, 4.0]) . "<br>";

echo sapaSeseorang("Haqi") . "<br>";
// ====== ARGUMEN DEFAULT & NAMED ARGUMENTS (PHP 8) ======
function buatKartu(int $npm, int $tahun, string $jenis = "mahasiswa"): string {
 return "Kartu $jenis milik NPM $npm tahun angkatan $tahun";
}
// argumen default membuat parameter $jenis boleh diisi atau tidak:
echo buatKartu(1549, 2024) . "<br>";
// named arguments: jelas mana yang diisi untuk kolom apa:
echo buatKartu(1549, 2024, jenis: "asisten") . "<br>";
?>