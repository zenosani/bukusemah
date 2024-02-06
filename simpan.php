<?php

$nama 			= $_POST['nama'];
$nuptk 			= $_POST['nuptk'];
$jk 			= $_POST['jk'];
$tempat 		= $_POST['tempat'];
$tanggal 		= $_POST['tanggal'];
$gelar 			= $_POST['gelar'];
$sk_awal 		= $_POST['sk_awal'];
$tmt 			= $_POST['tmt'];
$jabatan 		= $_POST['jabatan'];
$prog_studi 	= $_POST['prog_studi'];

include 'koneksi.php';
$sql = "INSERT INTO tbguru (nama, nuptk, jk, tempat, tanggal, gelar, sk_awal, tmt, jabatan, prog_studi) values ('$nama','$nuptk','$jk','$tempat','$tanggal','$gelar','$sk_awal','$tmt','$jabatan','$prog_studi')";


$query = mysqli_query ($koneksi , $sql); 
if ($query){
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Disimpan'); 
		window.location ='lihat_buku.php';
	</script>
	<?php
}
?>