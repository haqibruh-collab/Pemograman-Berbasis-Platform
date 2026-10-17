<?php
// ====== IF-ELSE-ELSEIF ======
$nilai = 85;
if ($nilai >= 80) {
 echo "Grade A";
} elseif ($nilai >= 70) {
 echo "Grade B";
} elseif ($nilai >= 60) {
 echo "Grade C";
} else {
 echo "Grade D (perbaiki yaa)";
}
echo "<br>";

$predikat = match (true) {
 $nilai >= 80 => "Sangat Baik",
 $nilai >= 70 => "Baik",
 default => "Perlu Perbaikan",
};
echo "Predikat: $predikat<br>";

for ($i = 1; $i <= 3; $i++) {
 echo "for iterasi ke-$i<br>";
}
$j = 1;
while ($j <= 3) {
 echo "while iterasi ke-$j<br>";
 $j++;
}
?>