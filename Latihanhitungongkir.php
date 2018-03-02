<!DOCTYPE html>
<html>
<head>
<title>Halaman Hitung ongkir</title>
<meta charset="UTF-8"></meta>
<link rel="stylesheet" type="text/css" href="ongkir.css"></link>

</head>
<body>

<table id="tablecontent" border="2">
    <form action="Latihanhitungongkir2.php" method="post" onsubmit="return validasi(this)">
    <tr>
        <td id="headtable" colspan="3">Penjualan</td>
</tr>
<tr>
    <td id="labeltable">Nama barang</td>
    <td id="contenttable" colspan="2"><input type="text" size="12" name="valuenama"></input></td>
</tr>
<tr>
    <td id="labeltable">Harga</td>
    <td id="contenttable" colspan="2"><input type="text" size="12" name="valueharga"></input></td>
</tr>
<tr>
    <td id="labeltable">Quantity</td>
    <td id="contenttable" colspan="2"><input type="text" size="12" name="valuequantity"></input></td>
</tr>
<tr>
    <td id="labeltable">Status</td>
    <td id="contenttable" colspan="2"><input type="radio" name="valuepelanggan" value="Ya">Pelanggan</input> <input type="radio" name="valuepelanggan" value="Tidak">Bukan Pelanggan</input> </td>
</tr>
<tr>
    <td id="labeltable">Kota</td>
    <td id="contenttable" colspan="2"><select name="valuekota"> <option value="select">--Pilih Kota--</option> <option value="Jakarta">Jakarta</option> <option value="Bandung">Bandung</option> <option value="Surabaya">Surabaya</option></select> </td>
</tr>
<tr>
    <td id="labeltable">&nbsp;</td>
    <td id="contenttable" colspan="2"><input type="Submit" value="Hitung"></input>&nbsp;<input type="Reset" value="Hapus"></input>
</form>
</table>
<script type="text/javascript">
    function validasi(form)
    {
        if(form.valuenama.value=="" || form.valueharga.value=="" || form.valuequantity.value==""  || form.valuepelanggan.value==""  || form.valuekota.value=="select" || isNaN(form.valueharga.value)==true || isNaN(form.valuequantity.value)==true )
        { 
            alert("Ada kesalahan pada saat menginput data");
            form.valuenama.focus();
            return(false);
        }
            return(true);
        
    }
    
    
    </script>
</body>
</html>