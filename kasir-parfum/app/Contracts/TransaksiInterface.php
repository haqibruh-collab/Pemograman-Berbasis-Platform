<?php

namespace App\Contracts;

interface TransaksiInterface
{
    public function hitungTotalHarga(): float;
    public function getDetailProduk(): string;
}