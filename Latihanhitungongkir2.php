<!DOCTYPE html>
<html>
<head>
<title>Halaman Hitung ongkir</title>
<meta charset="UTF-8"></meta>
<link rel="stylesheet" type="text/css" href="ongkir.css"></link>

</head>
<body>
<?php
$benar=true;
if(isset($_POST['valuenama']) && isset($_POST['valueharga']) && isset($_POST['valuequantity']) && isset($_POST['valuepelanggan'])  && isset($_POST['valuekota']))
{
$namabarang=$_POST['valuenama'];
$hargabarang=$_POST['valueharga'];
$quantity=$_POST['valuequantity'];
$pelanggan=$_POST['valuepelanggan'];
$kota=$_POST['valuekota'];

if(is_numeric($hargabarang)==false)
{
    $benar=false;
}
if(is_numeric($quantity)==false)
{
    $benar=false;    
}
if($kota=="select")
{
    $benar=false;    
}
}
else
{
    $benar=false;
}

if($benar==true)
{
    $subtotal=$hargabarang*$quantity;
    $disc=0;
    $ongkir=hitungongkir($kota);
    if($pelanggan=="Ya")
    {
          $pelanggan="Pelanggan";
          $disc=(10*$subtotal)/100;
    }
    else
    {
        $pelanggan="Bukan";
    }
    $total=($subtotal-$disc)+$ongkir;
    
echo "<table id=\"tablecontent\" border=\"2\">
<tr>
    <td id=\"headtable\" colspan=\"3\">Hasil Perhitungan</td>
</tr>

<tr>
    <td id=\"labeltable\">Nama barang</td>
    <td id=\"contenttable\" colspan=\"2\">".$namabarang."</td>
</tr>
<tr>
    <td id=\"labeltable\">Harga barang</td>
    <td id=\"contenttable\" colspan=\"2\">Rp.".$hargabarang."</td>
</tr>
<tr>
    <td id=\"labeltable\">Quantity</td>
    <td id=\"contenttable\" colspan=\"2\">".$quantity."</td>
</tr>
<tr>
    <td id=\"labeltable\">Subtotal</td>
    <td id=\"contenttable\" colspan=\"2\">Rp.".$subtotal."</td>
</tr>
<tr>
    <td id=\"labeltable\">Pelanggan</td>
    <td id=\"contenttable\" colspan=\"2\">".$pelanggan."</td>
</tr>
<tr>
    <td id=\"labeltable\">Discount</td>
    <td id=\"contenttable\" colspan=\"2\">Rp.".$disc."</td>
</tr>
<tr>
    <td id=\"labeltable\">Ongkir</td>
    <td id=\"contenttable\" colspan=\"2\">Rp.".$ongkir."(".$kota.")</td>
</tr>
<tr>
    <td id=\"labeltablehasil\">Total</td>
    <td id=\"contenthasil\" colspan=\"2\">Rp.".$total."</td>
</tr>
</table>
<br> 
 <u id=\"tulisan_balik\"><a href=\"Latihanhitungongkir.php\">Kembali ke menu awal</a></u>";
}
else
{
    echo "<div id=\"error\">Ada kesalahan pada saat memasukan data</p><br>&nbsp;&nbsp;&nbsp;&nbsp;<u><a href=\"Latihanhitungongkir.php\">Kembali ke menu awal</a></u></div>";
}

function hitungongkir($kota)
{
    if($kota=="Jakarta")
    {
        return 20000;
    }
    else if($kota=="Bandung")
    {
        return 10000;
    }
    else
    {
        return 30000;
    }

}

?>

</body>
</html>