<?php $nilai= 60; //nilai akhir 
$presensi = 12; //jumlah siswa masuk kelas di satu pelajaran 
if($nilai>80)
{
    if($presensi>=10) //jika maksimal tidak masuk 2x
    {
        $hasil = "A";
    }
    else
    {
        $hasil = "D";
    }
}
elseif($nilai>60)
{
    if($presensi>=10)
    {
        $hasil = "B";
    }
    else
    {
        $hasil = "D";
    }
}
else
{
    if($presensi>=10)
    {
        $hasil = "C";
    }
    else
    {
        $hasil = "D";
    }
}

echo "Nilai Akhir: ".$hasil;