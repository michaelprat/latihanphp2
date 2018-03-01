<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
function make_name($first,$last,$age)
{
    $fullname=$first." ".$last;
   // global $umur;//variabel global
    $fullname=$fullname;
    //$umur=$age;
    $datakomplit=array(0=>$fullname,1=>$age);
      
   return $datakomplit;
}   

$datalengkap=make_name("Andre","Kunto",20);
echo $datalengkap[0].$datalengkap[1];
?>

</html>