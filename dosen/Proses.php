<?php
require_once "../helper/connection.php";

$NIK = $_POST['NIK'];
$Inisial = $_POST['Inisial'];
$Nama_Dosen = $_POST['Nama_Dosen'];
$tanggal = $_POST['tanggal'];
$Status = $_POST['Status'];
$Sex = $_POST['sex'];
$Agama = $_POST['Agama'];
$Login = $_POST['Login'];
$Pass = $_POST['Pass'];
$pass2 = $_POST['pass2'];
$Alamat = $_POST['Alamat'];
$Kota = $_POST['Kota'];
$Email = $_POST['Email'];
$No_Hp = $_POST['No_Hp'];
$Salary = $_POST['Salary'];
$query = mysqli_query($connection, "insert into dosen(NIK, Inisial, Nama_dosen, tanggal, Status, Sex, Agama, Login, Pass, pass2
 Alamat, Kota, Email, No_hp, Salary) 
value('$NIK', '$Inisial', '$Nama_Dosen' , '$tanggal', '$Status' , '$Sex', '$Agama', '$Login' , '$Pass', '$pass2', 
'$Alamat', '$Kota', '$Email', '$No_Hp', '$Salary')");
if ($query) {
  echo "Berhasil input data ke database";
?> <a href="index.php">Lihat Data Di Tabel</a><?php
                                            } else {
                                              echo "Gagal Input Data";
                                              echo mysqli_error($connection);
                                            }
                                              ?>