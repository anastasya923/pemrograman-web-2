<?php
// Tes Psikotes Deret Angka

// a. 4 6 9 13 18 ? ?
$a = [4, 6, 9, 13, 18];
for ($i = 1; $i <= 2; $i++) {
    $selisih = ($a[count($a) - 1] - $a[count($a) - 2]) + 1;
    $a[] = end($a) + $selisih;
}

// b. 2 2 3 3 4 ? ?
$b = [2, 2, 3, 3, 4];
$next = end($b);
$b[] = $next; // 4 lagi
$b[] = $next + 1; // kemudian 5

// c. 1 9 2 10 3 ? ?
$c = [1, 9, 2, 10, 3];
$next1 = $c[count($c) - 4] + 1; // deret ganjil (1,2,3,4)
$next2 = $c[count($c) - 3] + 1; // deret genap (9,10,11)
$c[] = $next2;
$c[] = $next1;

// Tampilkan hasil
echo "a. " . implode(" ", $a) . "<br>";
echo "b. " . implode(" ", $b) . "<br>";
echo "c. " . implode(" ", $c) . "<br>";
?>