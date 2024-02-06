<?php

$usn 			= $_POST['usn'];
$pass 			= $_POST['pass'];


include 'koneksi.php';
$sql = "SELECT * FROM tblogin
	WHERE usn = '$usn' AND pass = '$pass'";


$result = mysqli_query ($koneksi , $sql); 
if (mysqli_num_rows($result) > 0) {
	?>
	<script type="text/javascript">
		alert ('login sukses'); 
		window.location ='home.php';
	</script>
	<?php
}
else {
	?>
	<script type="text/javascript">
		alert ('username atau password salah, coba lagi'); 
		window.location ='login.php';
	</script>
	<?php
}
?>