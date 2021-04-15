<?php
session_start();
require_once '../helper/connection.php';

$NIK = $_GET['NIK'];
$result = mysqli_query($connection, "delete from dosen where nik ='$NIK'");

if (mysqli_affected_rows($connection) > 0) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menghapus data'
  ];
  header('Location: index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: index.php');
}
