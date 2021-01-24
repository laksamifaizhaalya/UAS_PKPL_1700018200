<?php
class Nilai
{
    function inputnilai($inputnilai)
    {
        if ($inputnilai == '76') {
            return TRUE;
        }
    }
    


    function main($inputnilai)
    {
        if ($this->inputnilai($inputnilai) == false) {
                return 'Nilai Anda Tidak Lulus';
            }else{
            return 'Nilai Anda Lulus ';
            }
        }
    }

$authentikasi = new Nilai;
$cek = $authentikasi->main('76');
echo $cek;