<?php
require_once "../helper/connection.php";

$NIK = $_POST['NIK'];
$Inisial = $_POST['Inisial'];
$Nama_dosen = $_POST['Nama_dosen'];
$tanggal = $_POST['tanggal'];
$Status = $_POST['Status'];
$Sex = $_POST['Sex'];
$Agama = $_POST['Agama'];
$Login = $_POST['Login'];
$Pass = $_POST['Pass'];
$pass2 = $_POST['pass2'];
$Alamat = $_POST['Alamat'];
$Kota = $_POST['Kota'];
$Email = $_POST['Email'];
$No_hp = $_POST['No_hp'];
$Salary = $_POST['Salary'];
$query = mysqli_query($connection, "update dosen set nik = '$NIK', inisial = '$Inisial', nama_dosen = '$Nama_dosen', tanggal='$tanggal', status = '$Status',sex = '$Sex',
 agama = '$Agama', login = '$Login',pass = '$Pass',pass2 = '$pass2', alamat = '$Alamat', kota = '$Kota', email = '$Email', no_hp = '$No_hp', salary = '$Salary' where NIK = '$NIK'");
if ($query) {
    echo "Berhasil Update ke database ";
?><a href="index.php">Lihat data di Tabel</a><?php
                                            } else {
                                                echo "Gagal Update Data";
                                                echo mysqli_error($connection);
                                            }
                                                ?>