<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
   <script>
        function handleLogout() {
            var isLoggedIn = true; // Replace this with your actual logic to check if the user is logged in

            if (isLoggedIn) {
                // Ask for confirmation
                var confirmLogout = window.confirm('Anda yakin ingin keluar?');

                // If the user clicks "OK" (true), perform logout action
                if (confirmLogout) {
                    // Perform logout action
                    alert('Keluar sukses');
                    window.location.href = 'index.php';
                } else {
                    // User clicked "Cancel" (false), do nothing or perform alternative action
                    alert('Keluar dibatalkan');
                   
                }
            } 
        }
    </script>
    <style>
        body {
            margin: 0;
            font-family: 'Poppins';
            width: 100%;
            background: url('hyperling/sunset.jpg')no-repeat;
        }

        nav {
            background-color: #333;
            overflow: hidden;
            padding:;
        }

        nav a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            margin-top: 10px ;
            margin-bottom: 10px ;
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

       .home-konten {
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    height: 50vh; /* Optional: set a minimum height for centering vertically */
}

        
</style>
</head>
<body>

<nav>
    <div class="logo">
         <a href="home.php"><img src="hyperling/book.jpg" alt="Logo" >
        <span>Buku Tamu</span></a>
    </div>
    <div class="nav-links">
        <a href="home.php">Home</a>
         <a href="lihat_akun.php">Data Pegawai</a>
        <a href="lihat_buku.php">Data Buku</a>
        <a class="logout" href="javascript:void(0);" onclick="handleLogout()">Keluar </a>
    </div>
</nav>

<div class="home-konten">
    <h1>Selamat Datang di Website Kami</h1>
</div>

<!-- Your page content goes here -->

</body>
</html>
