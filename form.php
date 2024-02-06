<?php
  include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku Tamu</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: rgb(34,193,195);
      background: linear-gradient(42deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);
      margin: 80px;
      padding: 80px;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
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
      padding-top: 60px;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Data Guru</h2>
  <form action="simpan.php" method="post">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required>

    <label for="nuptk">NUPTK:</label>
    <input type="number" id="nuptk" name="nuptk" required>

    <label for="jk">Jenis Kelamin:</label>
    <input type="text" id="jk" name="jk" required>

    <label for="tempat">Tempat:</label>
    <input type="text" id="tempat" name="tempat" required>

    <label for="tanggal">Tanggal:</label>
    <input type="text" id="tanggal" name="tanggal" required>

    <label for="gelar">Gelar:</label>
    <input type="text" id="gelar" name="gelar" required>

    <label for="sk_awal">SK Awal:</label>
    <input type="text" id="sk_awal" name="sk_awal" required>

    <label for="tmt">Tamat:</label>
    <input type="text" id="tmt" name="tmt" required>

    <label for="jabatan">Jabatan:</label>
    <input type="text" id="jabatan" name="jabatan" required>

    <label for="prog_studi">Prog. Studi:</label>
    <input type="text" id="prog_studi" name="prog_studi" required>

    <button type="submit">Kirim</button>
   
  </form>

   <label for="lihatbuku"><a href="lihat_buku.php">Lihat Data Guru</a></label>
    <span></span>
    <span></span>
    <label for="lihatakun"><a href="lihat_akun.php">Lihat Data Akun</a></label>
</div>

</body>
</html>