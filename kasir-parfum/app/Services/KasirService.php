<?php

namespace App\Services;

use App\Contracts\TransaksiInterface;

class KasirService
{
    /** @var TransaksiInterface[] */
    private array $keranjang = [];

    public function tambahItem(TransaksiInterface $item): void
    {
        $this->keranjang[] = $item;
    }

    public function cetakStruk(): void
    {
        echo "===========================================\n";
        echo "           STRUK KASIR PARFUM              \n";
        echo "===========================================\n";

        $totalBayar = 0;
        foreach ($this->keranjang as $index => $item) {
            echo ($index + 1) . ". " . $item->getDetailProduk() . "\n";
            $totalBayar += $item->hitungTotalHarga();
        }

        echo "-------------------------------------------\n";
        echo "TOTAL PEMBAYARAN : Rp " . number_format($totalBayar, 0, ',', '.') . "\n";
        echo "===========================================\n";
    }
}