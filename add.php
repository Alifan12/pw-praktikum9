<?php
require 'koneksi.php';

if (isset($_POST["submit"])) {
  if (add($_POST) > 0) {
    echo "
      <script>
          alert('Data karyawan BERHASIL ditambahkan!');
          document.location.href = 'add.php';
      </script>
    ";
  } else {
    echo "
      <script>
          alert('Data karyawan GAGAL ditambahkan!');
          document.location.href = 'add.php';
      </script>
    ";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Insert Karyawan</title>
  <style>
  body {
    margin: 0;
  }

  .outer-container {
    position: absolute;
    display: table;
    width: 100%;
    height: 100%;
    background-color: lightskyblue;
  }

  .inner-container {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
  }

  .centered-content {
    display: inline-block;
    background: #fff;
    padding: 20px;
    border: 1px solid #000;
    border-radius: 5px;
  }

  .centered-content h1 {
    font-size: 30px;
  }

  .centered-content table,
  input,
  select {
    font-size: 25px;
    margin: 5px;
  }

  .centered-content select {
    width: 292px;
    height: 43px;
  }

  .centered-content button,
  a {
    margin-top: 10px;
    font-size: 20px;
    width: 120px;
    height: 40px;
  }
  </style>
</head>

<body>
  <div class="outer-container">
    <div class="inner-container">
      <div class="centered-content">
        <h1>Tambah Data Karyawan</h1>
        <form method="POST">
          <table>
            <tr>
              <td for="name">Name</td>
              <td><input type="text" name="name"></td>
            </tr>
            <tr>
              <td for="email">Email</td>
              <td><input type="email" name="email"></td>
            </tr>
            <tr>
              <td for="address">Address</td>
              <td><input type="text" name="address"></td>
            </tr>
            <tr>
              <td for="gender">Gender</td>
              <td>
                <select name="gender">
                  <option value="Female">Female</option>
                  <option value="Male">Male</option>
                </select>
              </td>
            </tr>
            <tr>
              <td for="position">Position</td>
              <td><input type="text" name="position"></td>
            </tr>
            <tr>
              <td for="status">Status</td>
              <td>
                <select name="status" aria-placeholder="Pilih Status">
                  <option value="Fulltime">Fulltime</option>
                  <option value="Parttime">Parttime</option>
                </select>
              </td>
            </tr>
          </table>
          <button type="submit" name="submit" class="btn btn-success">Add Data</button>
          <a href="index.php" class="btn btn-primary">Back</a>
        </form>
      </div>
    </div>
  </div>
</body>

</html>