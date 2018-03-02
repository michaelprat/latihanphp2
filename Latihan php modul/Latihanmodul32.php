<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Php latihan 3 </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="pesantiket.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link href="css/style.css" rel="stylesheet">
  
  </head>
  <body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
		
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="Latihanmodul3.php"><span>Pesankereta.com</span></a>
			</div>
			<div class="navbar-collapse collapse">							
				<div class="menu">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation"  class="active"><a href="Latihanmodul3.php">Home</a></li>
						<li role="presentation"><a href="Latihanmodul32.php">Pesan Tiket</a></li>
											
					</ul>
				</div>
			</div>			
		</div>
	</nav>
   
<div id="isi">
<div id="gbox">
          <div id="gbox-top"> </div>
          <div id="gbox-bg">
            <div id="gbox-grd">
              <h1>Pesan Tiket </h1>
              <br>
              <h2 id="error"></h2>
              <br>       
	<form action="Latihanmodul33.php" method="post" onsubmit="return validasi(this)">
      <table witdh="200px">
          <tr>
              <td id="label">Nama pemesan</td>
              <td colspan="2">&nbsp;:<input type="text" name="nama" size="14" placeholder="Masukan Nama" ></input></td>
</tr>
<tr>
    <td>&nbsp;</td>
    
    <td>&nbsp;</td>
</tr>

<tr>
             <td>Laki Laki <input type="radio" value="Laki-laki" name="gender"></input> </td>
             <td>Wanita  <input type="radio" value="Wanita" name="gender"></input></td>
</tr>
<tr>
    <td>&nbsp;</td>
    
    <td>&nbsp;</td>
</tr>
  <tr>
              <td id="label">Masukan no ktp</td>
              <td colspan="2">&nbsp;:<input type="text" name="ktp" size="14" placeholder="Masukan No ktp" ></input></td>
</tr>
</table>
<p>Masukan alamat:</p>
<textarea rows=5 cols=30 name="alamat" placeholder="Masukan Alamat"></textarea>
<br>
<input type="number" min="0" step="1" name="jumlahpesan" onchange="hitung()" id="pesanan" placeholder="masukan jumlah tiket"></input>
<br>
<br>
Subtotal&nbsp;&nbsp;
<input type="text"  name="hargatotal" id="hargapesanan" readonly></input>
<br>
<br>
Bayar &nbsp;&nbsp;&nbsp;&nbsp;
<input type="text"  name="hargabayar" id="valuebayar"></input>  
<br>
<br>
<input type="Submit" value="Proses"></input>&nbsp;&nbsp;<input type="reset" value="reset" ></input>
</form>
</div>
</div>
</div>
</div>

	
<?php
?>
<script type="text/javascript">

    function hitung()
    {
        var harga=parseInt(document.getElementById("pesanan").value);   
        harga=harga*90000;
        document.getElementById("hargapesanan").value=harga;
    }
    function validasi(form)
    {
        if(form.nama.value=="" || form.gender.value=="" || form.alamat.value==""  || form.jumlahpesan.value==""  || form.hargabayar.value=="" || isNaN(form.hargabayar.value)==true )
        { 
            document.getElementById("error").innerHTML="Ada kesalahan memasukan data";
         
            return(false);
        }
        else
        { 
            var hargabayar=parseInt(document.getElementById("valuebayar").value); 
            var harga=parseInt(document.getElementById("pesanan").value);   
             harga=harga*90000;
          if(hargabayar<harga)
          {
            document.getElementById("error").innerHTML="Total bayar kurang";
            return(false);
          }
            return(true);
       
        }
             
    }
</script>
  </body>
  </html>