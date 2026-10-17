<?php

namespace App\Models;

class ParfumOriginal extends Parfum
{
    private float $diskonPersen;

    public function __construct(string $nama, float $hargaSatuan, float $diskonPersen = 0)
    {
        parent::__construct($nama, $hargaSatuan, 1);
        $this->diskonPersen = $diskonPersen;
    }

    public function hitungTotalHarga(): float
    {
        $subtotal = $this->hargaPerMl;
        $diskon = $subtotal * ($this->diskonPersen / 100);
        return $subtotal - $diskon;
    }

    public function getDetailProduk(): string
    {
        return "Parfum Original: {$this->nama} (Diskon {$this->diskonPersen}%) - Rp " . number_format($this->hitungTotalHarga(), 0, ',', '.');
    }
}