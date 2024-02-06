<?php
  include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <title>Buku Tamu</title>
  <style>
    body {
      font-family: 'Poppins';
      background: rgb(131,58,180);
      background: linear-gradient(42deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);
      margin: 100px;
      padding: 100px;
      display: flex;
      justify-content: center;
      align-items: center;
      
    }

    .container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 300px;
    }

    h2 {
      text-align: center;
    }

    label {
      display: block;
      margin: 10px 0 5px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }

    textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      background-color: #45a049;
    }

    a {
      text-decoration: none;
      padding-top: ;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Daftar Akun</h2>
  <form action="simpan_akun.php" method="post">
    <label for="nama">Nama</label>
    <input type="text" id="nama" name="nama" required>

    <label for="tgl">Tanggal Lahir</label>
    <input type="text" id="tgl" name="tgl" required>

    <label for="alamat">Alamat</label>
    <input type="text" id="alamat" name="alamat" required>

    <label for="usn">Username</label>
    <input type="text" id="usn" name="usn" required>

    <label for="pass">Password</label>
    <input type="text" id="pass" name="pass" required>

    <button type="submit">Daftar</button>
    
    
  </form>
</div>

</body>
</html>