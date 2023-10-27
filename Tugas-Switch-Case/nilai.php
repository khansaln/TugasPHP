<?php 
    $nilai = 90;
    $grade='';

    switch(true) {
      case($nilai>= 90 && $nilai<= 100):
        $grade ="A";
        break;
    case($nilai>= 80 && $nilai< 90):
            $kgrade ="B";
            break;
    case($nilai>= 70 && $nilai< 80):
        $kgrade ="C";
        break;
    default:
        $grade="D";
    
    }

    echo "Grade nilai Anda adalah : $grade";
