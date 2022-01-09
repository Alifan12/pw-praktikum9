<?php

//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "praktikum9");

// Mengembalikan data database
function query($query)
{
  global $koneksi;
  $data = mysqli_query($koneksi, $query);
  $karyawans = [];
  while ($karyawan = mysqli_fetch_assoc($data)) {
    $karyawans[] = $karyawan;
  }
  return $karyawans;
}

// Menambah data ke database
function add($data)
{
  global $koneksi;

  $name = $data['name'];
  $email = $data['email'];
  $address = $data['address'];
  $gender = $data['gender'];
  $position = $data['position'];
  $status = $data['status'];

  $query = "INSERT INTO karyawan 
            VALUES
            ('', '$name','$email','$address','$gender','$position','$status')
    ";

  mysqli_query($koneksi, $query);

  return mysqli_affected_rows($koneksi);
}

function hapus($id)
{
  global $koneksi;
  mysqli_query($koneksi, "DELETE FROM karyawan WHERE id = $id");
  //mengembalikan jumlah pada database,
  //contoh: jika id = 3 terdapat pada database maka akan mereturn nilai 1, jika tidak ada maka return 0
  return mysqli_affected_rows($koneksi);
}