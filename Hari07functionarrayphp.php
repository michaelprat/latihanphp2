<?php
$kendaraan=array("Mobil","Motor","Sepeda","Truk","Bus");// bisa juga penulisan array seperti $kendaraan=["Mobil","Motor","Sepeda","Truk"];
echo "Data kendaraan awal<br>";
print_r($kendaraan);
echo"<br><br>";
echo "Ditemukan data sebanyak".count($kendaraan)."data <br>";

echo "Data array mengandung kata Motor";
if(in_array("Motor",$kendaraan))
{
    echo "  Oks";
}
echo "<br><br>";
$mobil=["Merk"=>"Toyota","Type"=>"Vios","Year"=>2016];
echo "Data mobil<br>";
print_r($mobil);
if(key_exists("Type",$mobil))
{
    echo $mobil["Type"];
}
echo "<br><br>";


echo "KEYS DATA MOBIL<br>";
$keys=array_keys($mobil);
print_r($keys);
echo "<br><br>";

echo "Values DATA MOBIL<br>";
$values=array_values($mobil);
print_r($values);
echo "<br><br>";

asort($kendaraan);
echo "Data array disorting berdasarkan abjad A-Z<br>";
print_r($kendaraan);
echo "<br><br>";

arsort($kendaraan);
echo "Data array disorting berdasarkan abjad Z-A<br>";
print_r($kendaraan);
echo "<br><br>";

ksort($mobil);
echo "Key array disorting berdasarkan abjad A-Z<br>";
print_r($mobil);
echo "<br><br>";


krsort($mobil);
echo "Key array disorting berdasarkan abjad Z-A<br>";
print_r($mobil);
echo "<br><br>";

$merge =array_merge ($kendaraan,$mobil);
echo "Menggabungkan 2 array";
print_r($merge);
echo "<br><br>";

echo "Menambah array :";
array_push($kendaraan,"Becak","Delman");
print_r($kendaraan);
echo "<br><br>";

echo "Mencari nilai max dan min :";
$nilai =[90,70,85,65,80];
$max=max($nilai);
$min=min($nilai);
echo "Nilai Max:".$max."<br>";
echo "Nilai Min:".$min."<br>";
echo "<br><br>";

?>