<!DOCTYPE html>
<html>
<head>
<title>
Latihan Modul PHP 1
</title>
</head>
<body>
<H1>Program Hitung Ganjil dan Genap</H1>
<table width="400">
<form action="#" method="post">
<tr>
<td>Masukan Angka</td>
<td colspan="2">:<input type="text" name="angka"></input></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" value="Hasil" name="masuk"></input> &nbsp;&nbsp;</input> <input type="reset" value="reset"></input></td>

</tr>
</table>
<br></br>
<?php 
if(isset($_POST['masuk']))
{
if(isset($_POST['angka']))
{
$angka=$_POST['angka'];
if(is_numeric($angka)==false)
{
echo "<H2>Tolong masukan angka dengan benar</H2>";
}
else
{
  if($angka%2==0)
  {
      echo "<H2>".$angka." &nbsp adalah angka genap</H2>";
  }
  else
  {
    echo "<H2>".$angka." &nbsp adalah angka ganjil</H2>";
  }
}
}
else
{
    echo "<H2>Tolong masukan angka terlebih dahulu</H2>";
    
}
}
?>
</html>
</body>