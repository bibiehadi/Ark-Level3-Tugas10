<!DOCTYPE html>
<html>
<head>
	<title>Level 3 - Tugas 10 (Pretest Arkademy Bootcamp)</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
		*{
			margin : 10px;
		}
	</style>
</head>
<body>
	<center>
		<h1>Level 3 - Tugas 10 (Pretest Arkademy Bootcamp)</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($produk as $p){ ?>
	<form action="<?php echo site_url('/produk/update') ; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
                <input type="hidden" name="id" value="<?php echo $p->id ?>">
				<td>Nama</td>
				<td>	
					<input type="text" name="nama_produk" value="<?php echo $p->nama_produk ?>">
				</td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" value="<?php echo $p->keterangan ?>"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="<?php echo $p->harga ?>"></td>
			</tr>
            <tr>
				<td>Jumlah</td>
				<td><input type="text" name="jumlah" value="<?php echo $p->jumlah ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input class="btn btn-success" type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>