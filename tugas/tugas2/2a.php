<?php 

$nama_depan = "Rangga";
$nama_belakang = "Dhani";

for ($angka = 1; $angka <= 100; $angka++) {
    if ($angka % 3 == 0 and $angka % 5 == 0) {
        echo "$nama_depan $nama_belakang <br>";
    } elseif ($angka % 3 == 0) {
        echo "$nama_depan <br>";
    } elseif ($angka % 5 == 0) {
        echo "$nama_belakang <br>";
    } else {
        echo "$angka <br>";
    }


}



?>