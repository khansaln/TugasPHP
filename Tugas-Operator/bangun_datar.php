<?php

class Luas
{
    /** 
    $p adalah panjang
    $l adalah lebar
     */
    public function persegi_panjang($p, $l)
    {
        return $p * $l;
    }

    /** 
    $s adalah panjang sisi
     */
    public function persegi($s)
    {
        return pow($s, 2);
    }

    /** 
    $d1 adalah diagnoal 1
    $d2 adalah diagonal 2
     */
    public function belah_ketupat($d1, $d2)
    {
        return 0.5 * $d1 * $d2;
    }

    /** 
    $a adalah alas
    $t adalah tinggi
     */
    public function segitiga($a, $t)
    {
        return 0.5 * $a * $t;
    }
    /** 
    $r1 adalah panjang rusuk 1
    $r2 adalah panjang rusuk 2
    $t adalah tinggi
     */
    public function trapesium($r1, $r2, $t)
    {
        return 0.5 * ($r1 + $r2) * $t;
    }

    /** 
    $r adalah jari-jari lingkaran
     */
    public function lingkaran($r)
    {
        return pi() * (pow($r, 2));
    }
}

$luas = new Luas();

#hitung  Luas Persegi Panjang
$p = 4;
$l = 5;
echo "Luas Persegi Panjang :" . $luas->persegi_panjang($p, $l) . "<br>";

#hitung persegi
$s = 7;
echo "Luas Persegi :" . $luas->persegi($s) . "<br>";

#hitung segitiga
$a = 10;
$t = 7;
echo "Luas Jajar Genjang :" . $luas->segitiga($a, $t) . "<br>";

#hitung belah ketupat
$d1 = 5;
$d2 = 10;
echo "Luas Jajar Genjang :" . $luas->belah_ketupat($d1, $d2) . "<br>";

#hitung trapesium
$sr1 = 5;
$sr2 = 6;
$t = 10;
echo "Luas Trapesium :" . $luas->trapesium($sr1, $sr2, $t) . "<br>";

#hitung lingkaran
$r = 7;
echo "Luas Lingkaran :" . $luas->lingkaran($r) . "<br>";
