<!DOCTYPE html>
<html>
<head>
<title>
Latihan Modul PHP 2
</title>
</head>
<body>
<H1>Program Looping bintang</H1>
<table width="400">
<form action="#" method="post">
<tr>
<td>Jumlah n:</td>
<td colspan="2"><input type="text" name="angka"></input></td>
<td><input type="submit" value="cetak" name="masuk"></td>
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
    $x=$angka;
    for($x;$x>0;$x--)
    {
        for($y=0;$y<$x;$y++)
        {
            if($x==$angka || $y==0 || $y==$x-1)
            {
              echo"*";
            }
            else
            {
              
             echo"&nbsp;&nbsp;";
            }
        }
    echo"<br>";
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