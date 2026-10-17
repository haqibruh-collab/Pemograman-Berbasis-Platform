<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Models\ParfumRefill;
use App\Models\ParfumOriginal;
use App\Services\KasirService;

$kasir = new KasirService();

$parfum1 = new ParfumRefill('Vanilla Sweet', 1000, 50, 5000);
$parfum2 = new ParfumOriginal('Dior Sauvage 100ml', 1500000, 10);

$kasir->tambahItem($parfum1);
$kasir->tambahItem($parfum2);

$kasir->cetakStruk();