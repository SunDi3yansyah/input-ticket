<!DOCTYPE html>
<!-- Author: SunDi3yansyah -->
<html>
<head>
<title>Proses Simpan</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<br style="padding-top:50px;"/>
<div class="cont">
<p class="bg-danger f-center" style="padding: 10px;">
<?php
	include "koneksi.php";
	$nomorreservasi=$_POST['nomor_reservasi'];
	$namapemesan=$_POST['nama_pemesan'];
	$tujuan=$_POST['tujuan'];
	$tiket=$_POST['jenis_tiket'];
    if ($tujuan=="Yogyakarta"){$biayatujuan='350000'; $biayapokok='100000';}
	else if ($tujuan=="Singapura"){$biayatujuan='1000000'; $biayapokok='250000';}
	else if ($tujuan=="Hongkong"){$biayatujuan='2000000'; $biayapokok='250000';}

	if ($tiket=="promosi"){$potongan=0.75*$biayatujuan;}
    else {$potongan=0;}
    $total= $biayatujuan+$biayapokok - $potongan;
	mysql_query("insert into pesawat(no_reservasi,nama_pemesan,tujuan,biaya_tujuan,biaya_pokok,potongan,total,jenis_tiket)
						values ('$nomorreservasi','$namapemesan','$tujuan','$biayatujuan','$biayapokok','$potongan','$total','$tiket')",$koneksi);
	echo "<span class=\"saved\">Data Tersimpan</span> "
?>
<br/>
<br/>
<a class="btn btn-success" href="index.php">Input Kembali</a> <a class="btn btn-info" href="tampil_data.php">Lihat Data</a>
</p>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>