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
      background: rgb(2,0,36);
      background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 42%, rgba(0,212,255,1) 100%);
      margin: 80px;
      padding: 80px;
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
      margin: 0 0 5px;
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

    p {
      padding-top: 2px;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Login Akun</h2>
  <form action="save.php" method="post">
   

    <label for="usn">Username</label>
    <input type="text" id="usn" name="usn" required>

    <label for="pass">Password</label>
    <input type="password" id="pass" name="pass" required>

    <button type="submit">Login</button>
    <p>Belum punya akun? <a href="daftar.php">Daftar disini</a></p>
    
  </form>
</div>

</body>
</html>