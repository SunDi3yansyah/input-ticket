<!DOCTYPE html>
<!-- Author: SunDi3yansyah -->
<html>
<head>
<title>Penginputan Data Pesawat</title>
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
<form class="bg-info" action="proses_simpan.php" method="post" name="pesawat" id="tiket">
<table width="600" border="0" align="center" cellpadding="0" cellspacing="10">
<div class="f-center"><h1>Penginputan Data Pesawat</h1></div>
<tr>
      <td class="td-title">Nomor Reservasi</td>
      <td>:</td>
      <td><input class="form-control" type="text" name="nomor_reservasi"></td>
</tr>
<tr>
      <td class="td-title">Nama Pemesan</td>
      <td>:</td>
      <td><input class="form-control" type="text" name="nama_pemesan"></td>
</tr>
<tr>
      <td class="td-title">Tujuan</td>
      <td>:</td>
      <td><select class="form-control" name="tujuan" id="tujuan">
        <option value="Yogyakarta">Yogyakarta</option>
        <option value="Singapura">Singapura</option>
        <option value="Hongkong">Hongkong</option>
      </select></td>
</tr>
<tr>
      <td class="td-title" style="padding-top:0px;">Jenis Tiket</td>
      <td></td>
      <td>
        <p>
          <label>
            <input type="radio" name="jenis_tiket" value="reguler" id="jenis_tiket">Reguler</label>
          <br>
          <label>
            <input type="radio" name="jenis_tiket" value="promosi" id="jenis_tiket">Promosi</label>
          <br>
        </p>
      </td>
</tr>
</table>
<div class="submit">
<input class="btn btn-primary" type="submit" name="button" id="button" value="SIMPAN">
<input class="btn btn-primary" type="reset" name="button2" id="button2" value="RESET">
</div>
<br>
</form>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>