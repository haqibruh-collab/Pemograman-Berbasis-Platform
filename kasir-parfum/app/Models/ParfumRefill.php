<?php

namespace App\Models;

class ParfumRefill extends Parfum
{
    private float $biayaBotol;

    public function __construct(string $nama, float $hargaPerMl, int $ukuranMl, float $biayaBotol = 5000)
    {
        parent::__construct($nama, $hargaPerMl, $ukuranMl);
        $this->biayaBotol = $biayaBotol;
    }

    public function hitungTotalHarga(): float
    {
        return ($this->hargaPerMl * $this->ukuranMl) + $this->biayaBotol;
    }

    public function getDetailProduk(): string
    {
        return "Parfum Refill: {$this->nama} ({$this->ukuranMl} ml) - Rp " . number_format($this->hitungTotalHarga(), 0, ',', '.');
    }
}