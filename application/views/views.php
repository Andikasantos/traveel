<!DOCTYPE html>
<html>
<head>
	<title></title> 
</head>
<body>
	<a href="http://localhost/Code/index.php/users/add">Tambah</a>
	<table border="1">
		<tr><!--td ke ssamping tr kebawah-->
			<td>id</td>
			<td>username</td>
			<td>password</td>
			<td>fullname</td>
			<td>levels</td>
			<td>Masukkan Id yg Akan Dihapus<form action="http://localhost/Code" method="post">
						<input type="text" name="id">
						<input type="submit" name="submit" value="kirim">
					</form></td>
			<td>Masukkan Id yg Akan Diupdate<form action="http://localhost/Code/update2" method="post">
						<input type="text" name="id">
						<input type="submit" name="submit" value="kirim">
					</form></td>
		</tr>

		<?php foreach ($isi->result() as $key ): ?>

				<tr>

					<td><?php echo $key->id ?></td>
					<td><?php echo $key->username ?></td>
					<td><?php echo $key->password ?></td>
					<td><?php echo $key->fullname ?></td>
					<td><?php echo $key->level ?></td>
					<td><a href="http://localhost/Code/index.php/users/delete/<?php echo $key->id ?>">Delete</td>
					<td><a href="http://localhost/Code/index.php/users/update/<?php echo $key->id ?>">Update</td>
				</tr>
		<?php endforeach ?>

	</table>
</body>
</html>