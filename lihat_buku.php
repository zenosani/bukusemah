<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<title>Document</title>
	<script>
        function handleLogout() {
            var isLoggedIn = true; // Replace this with your actual logic to check if the user is logged in

            if (isLoggedIn) {
                // Ask for confirmation
                var confirmLogout = window.confirm('Are you sure you want to logout?');

                // If the user clicks "OK" (true), perform logout action
                if (confirmLogout) {
                    // Perform logout action
                    alert('Logged out successfully');
                    window.location.href = 'index.php';
                } else {
                    // User clicked "Cancel" (false), do nothing or perform alternative action
                    alert('Logout canceled');
                    
                }
            } 
        }
    </script>
	<style>
		body{
			 font-family: 'Poppins';
			background: rgb(63,94,251);
			background: linear-gradient(42deg, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);
			justify-content: center;
			align-items: 100vh;
			margin: 0;
		}

		table {
			width: 50%;
			border-collapse: collapse;
			background-color: white;
			margin:auto ;
		}

		th, td {
			border: 1px solid #ddd;
			padding: 12px;
			text-align: left;
		}

		th {
			background-color: #4caf50;
			color: white;
			text-align: center;

		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		h2 {
			text-align: center;
		}

		button {
			display: flex;
			width: 100px;
			height: 30px;
			justify-content: center;
			align-items: center;
		}

		.tbl {
			display: flex;
			flex-direction: row;
			padding: 20px;
			justify-content: space-around;
		}

	nav 
	{
            background-color: #333;
            overflow: hidden;
            padding:;
        }

        nav a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            margin-top: 5px ;
            margin-bottom: 5px ;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        nav .logout:hover {
            background-color: red;
            color: black;
        }

        .logo {
            float: left;
            padding: ;
        }

        .logo img {
            max-height: 16px;
        }

        .nav-links {
            float: right;
            display: flex;
            flex-direction: row;
        }

        .home-konten h1 {
            align-items: center;
            align-content: center;
         
        }
    </style>
</head>
<body>

<nav>
    <div class="logo">
        <a href="home.php"><img src="hyperling/book.jpg" alt="Logo">
        <span>Buku Tamu</span></a>
    </div>
    <div class="nav-links">
        <a href="home.php">Home</a>
         <a href="lihat_akun.php">Data Pegawai</a>
        <a href="lihat_buku.php">Data Buku</a>
        <a class="logout" href="javascript:void(0);" onclick="handleLogout()">Keluar </a>
    </div>
</nav>
<body>
<div>
	<h2>DAFTAR GURU</h2>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>NUPTK</th>
				<th>Jenis Kelamin</th>
				<th>Tempat</th>
				<th>Tanggal</th>
				<th>Gelar</th>
				<th>Sk Awal</th>
				<th>Tamat</th>
				<th>Jabatan</th>
				<th>Prog. Studi</th>
				<th>Aksi</th>
			</tr>
		</thead>
		</thead>
		<tbody>
			<?php
			include 'koneksi.php';
			$sql = "SELECT*FROM tbguru";
			$query = mysqli_query ($koneksi, $sql);
			$no=1;

			while ($data=mysqli_fetch_array($query)) {?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?php echo $data['nama'];?></td>
					<td><?php echo $data['nuptk'];?></td>
					<td><?php echo $data['jk'];?></td>
					<td><?php echo $data['tempat'];?></td>
					<td><?php echo $data['tanggal'];?></td>
					<td><?php echo $data['gelar'];?></td>
					<td><?php echo $data['sk_awal'];?></td>
					<td><?php echo $data['tmt'];?></td>
					<td><?php echo $data['jabatan'];?></td>
					<td><?php echo $data['prog_studi'];?></td>
					<td>
						<a href="hapus.php?id=<?php echo $data['no'];?>"
						onclick="return confirm('Yakin Mau Hapus .?')">
						<span class="text"></span>Hapus</Details> </span>
					</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<div class="tbl">
	<form method="post" action="home.php">
	<button type="submit">Kembali</button>
	 </form>

	 <form method="post" action="form.php">
	<button type="submit">Tambah Data</button>
	 </form>
	</div>


	 
</body>
</html>
				