<?php  
  header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/x-msexcel");
    header ("Content-type: application/octet-stream");
    header ("Content-Disposition: attachment; filename=Nama_File.xls");
?>

<h3><center>Laporan Data Buku Perputakaan Online</center></h3> 
<br/> 
<table class="table-data"> 
	<thead> 
		<tr> 
			<th>No</th> 
			<th>Judul Buku</th> 
			<th>Pengarang</th> 
			<th>Terbit</th>
			<th>Tahun Penerbit</th> 
			<th>ISBN</th> 
			<th>Stok</th> 
		</tr> 
	</thead> 
	<tbody> 
		<?php 
		$no = 1; 
		foreach($buku as $b)
		{ 
			?> 
			<tr> 
				<th scope="row"><?= $no++; ?></th> 
				<td><?= $b['judul_buku']; ?></td> 
				<td><?= $b['pengarang']; ?></td> 
				<td><?= $b['penerbit']; ?></td> 
				<td><?= $b['tahun_terbit']; ?></td> 
				<td><?= $b['isbn']; ?></td> 
				<td><?= $b['stok']; ?></td> 
			</tr> 
			<?php 
		} 
		?> 
	</tbody> 
</table> 
