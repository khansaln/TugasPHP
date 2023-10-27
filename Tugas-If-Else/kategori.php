<?php
$nama = "Khansa";
$berat = 60;
$tinggi_badan = 155;
$tinggi = $tinggi_badan / 100;
$bmi = $berat / ($tinggi * $tinggi);

if ($bmi <= 18.5) {
    $output = "Kurus";
} elseif ($bmi > 18.5 and $bmi <= 24.9) {
    $output = "Ideal";
} elseif ($bmi > 24.9 and $bmi <= 29.9) {
    $output = "Gemuk";
} elseif ($bmi > 30.0) {
    $output = "Obesitas";
};

echo "Nilai BMI $nama adalah $bmi ";
echo "BMI $nama  $output";
