<!DOCTYPE html>
<html>
<head>
	<title>Simanpen ABC GROUP</title>
</head>
<body>
	<center>
		<h1>Aneka Buah Cemerlang</h1>
		<h3>Update Data</h3>
	</center>
	<?php foreach($data as $u) { ?>
	<form action="<?php echo base_url(). 'index.php/admin/update_buah'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama Buah</td>
				<input type="hidden" name="id_buah" value="<?php echo $u->id_buah?>">
				<td><input type="text" name="nama_buah" value="<?php echo $u->nama_buah?>"></td>
			</tr>
			<tr>
				<td>Satuan</td>
				<td><input type="text" name="satuan" value="<?php echo $u->satuan?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>