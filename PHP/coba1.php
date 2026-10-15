<?php
$nim = "I.2610863";
$nama = "Rassel Muhammad Indra";
$umur = 19;
$nilai = 80;
$status = true;

echo "NIM   : $nim<br>";
echo "Nama  : $nama<br>";
print "Umur  : $umur";
print "<br>";
printf("Nilai : %.3f<br>", $nilai);

if ($status) {
    echo "Status : Aktif";
} else {
    echo "Status : Tidak Aktif";
}
?>
