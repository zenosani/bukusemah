<?php

$nama 			= $_POST['nama'];
$tgl 			= $_POST['tgl'];
$alamat	        = $_POST['alamat'];
$usn 			= $_POST['usn'];
$pass 			= $_POST['pass'];


include 'koneksi.php';
$sql = "INSERT INTO tblogin (nama, tgl, alamat, usn, pass) values ('$nama','$tgl','$alamat','$usn','$pass')";


$query = mysqli_query ($koneksi , $sql); 
if ($query){
	?>
	<script type="text/javascript">
		alert ('Pendaftaran akun berhasil'); 
		window.location ='home.php';
	</script>
	<?php
}
?>