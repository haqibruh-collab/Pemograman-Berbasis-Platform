<?php

namespace App\Models;

use App\Contracts\TransaksiInterface;

abstract class Parfum implements TransaksiInterface
{
    protected string $nama;
    protected float $hargaPerMl;
    protected int $ukuranMl;

    public function __construct(string $nama, float $hargaPerMl, int $ukuranMl)
    {
        $this->nama = $nama;
        $this->hargaPerMl = $hargaPerMl;
        $this->ukuranMl = $ukuranMl;
    }

    public function getNama(): string
    {
        return $this->nama;
    }

    abstract public function hitungTotalHarga(): float;
}