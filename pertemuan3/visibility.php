<?php
class contoh
{
    public string $nama    = "Haqi";
    protected string $npm  = "1549";
    private string $kuci   = "Sangat Rahasia";

    public function lihatKunci(): string
    {
        return $this->kuci;
    }
}

$c = new contoh();
echo $c->nama;
echo $c->lihatKunci();
?>