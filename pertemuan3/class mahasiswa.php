<?php
class Mahasiswa
{
    public string $nama;
    public float $ipk;

    public function __construct(string $nama, float $ipk)
    {
        $this->nama = $nama;
        $this->ipk  = $ipk;
    }

    public function statusKelulusan(): string
    {
        return $this->ipk >= 3.0 ? "Cumlaude" : "Reguler";
    }
}

$mhs1 = new Mahasiswa ("Haqi", 3.9);
$mhs2 = new Mahasiswa ("Fian", 2.9);

echo $mhs1->nama . " => " . $mhs1->statusKelulusan() . "\n <br>";
echo $mhs2->nama . " => " . $mhs2->statusKelulusan() . "\n";
?>