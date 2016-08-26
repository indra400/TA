<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($data as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama buah</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id_buah ?>">
					<input type="text" name="nama" value="<?php echo $u->nama_buah ?>">
				</td>
			</tr>
			<tr>
				<td>Satuan</td>
				<td><input type="text" name="alamat" value="<?php echo $u->satuan ?>"></td>
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