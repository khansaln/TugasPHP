<?php
class Volume
{
    public function kubus($s)
    {
        return pow($s, 3);
    }

    public function limas($p, $la, $t)
    {
        return $p * $la * $t;
    }

    public function prisma($la, $t)
    {
        return $la * $t;
    }
}

$volume = new Volume();

#volume kubus
$s = 5;
echo "Volume Kubus :" . $volume->kubus($s) . "<br>";

#volume limas
$p = 5;
$la = 6;
$t = 10;
echo "Volume Limas :" . $volume->limas($p, $la, $t) . "<br>";

#volume prisma
$la = 8;
$t = 10;
echo "Volume Prisma :" . $volume->prisma($la, $t) . "<br>";
