<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql = "DELETE FROM tbguru where no= '$id'";
$query = mysqli_query($koneksi, $sql);

if ($query) {
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Dihapus');
		window.location='lihat_buku.php';
	</script>
	<?php
}
?>