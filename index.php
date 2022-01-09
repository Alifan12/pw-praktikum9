<?php

require 'koneksi.php';

$karyawan = query("SELECT * FROM karyawan");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Data Karyawan</title>
  <style>
  body {
    background-color: lightskyblue;
  }

  h1 {
    text-align: center;
    margin-top: 100px;
    font-weight: bolder;
  }

  .container {
    margin-top: 50px;
    font-size: 25px;
    /* background-color: ; */
  }
  </style>
</head>

<body>
  <h1>
    Daftar Karyawan
  </h1>
  <div class="container" style="width: 100%;">
    <div class="flex-container">
      <a href="add.php" class="btn btn-primary" style="margin-right: 15%; margin-bottom: 5px;">Add Data</a>
    </div>
    <table align="center" cellpadding="5" cellspacing="0">
      <tr style="background-color: steelblue;" height="30px">
        <th width="20px">ID</th>
        <th width="200px">Name</th>
        <th width="300px">Email</th>
        <th width="400px">Address</th>
        <th width="150px">Gender</th>
        <th width="300px">Position</th>
        <th width="150px">Status</th>
        <th width="150px">Action</th>
      </tr>

      <?php foreach ((array)$karyawan as $item) : ?>
      <tr style="background-color: lightsteelblue;" height="30px">
        <td width="20px"><?= $item["id"] ?></td>
        <td width="200px"><?= $item["name"] ?></td>
        <td width="300px"><?= $item["email"] ?></td>
        <td width="400px"><?= $item["address"] ?></td>
        <td width="150px"><?= $item["gender"] ?></td>
        <td width="300px"><?= $item["position"] ?></td>
        <td width="150px"><?= $item["status"] ?></td>
        <td width="150px"><a href="delete.php?id=<?= $item['id']; ?>" class="btn btn-danger"
            onclick="return confirm('Apakah yakin data akan dihapus ?')">Delete</a>
        </td>

      </tr>
      <?php endforeach ?>
    </table>
  </div>
</body>

</html>