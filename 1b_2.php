<?php

interface Segitiga{
    public function hitung($alas,$tinggi,$sisi);
}

    
class luas implements Segitiga{
    public function hitung($alas,$tinggi, $sisi){
        
        $hasil = 1/2*$alas*$tinggi;
        Echo "Luas Segitiga : ". $hasil;
    }
}
   


class keliling implements Segitiga{
    public function hitung($alas,$tinggi,$sisi){  
        $hasil =3*$sisi;
        Echo "Keliling Segitiga : ". $hasil;
    }
    
}

    class hitung
    {
        public static function pilihan($pilihan){
        switch ($pilihan) {
            case 'luas':
                return new luas;
                break;
            case 'keliling':
                return new keliling;
                break;
            default:
                return FALSE;
        }
    }
}

$alas=25;
$tinggi=25;
$sisi=25;
hitung::pilihan('luas')->hitung($alas,$tinggi, $sisi);
echo '<br>';
hitung::pilihan('keliling')->hitung($alas,$tinggi,$sisi);

?>