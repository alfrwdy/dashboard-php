<?php
require_once "../helper/connection.php";

$NIK = $_GET['NIK'];
$query = mysqli_query($connection, "select * from dosen where NIK ='$NIK'");
?>
<form action="simpan.php" method="post">
    <table border="1">
        <?php
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <input type="hidden" name="ID" value="<?php echo $ID; ?>">
            <tr>
                <td>NIK</td>
                <td><input type="text" name="NIK" value="<?php echo $row['NIK']; ?>"></td>
            </tr>
            <tr>
                <td>Inisial</td>
                <td><input type="text" name="Inisial" value="<?php echo $row['Inisial']; ?>"></td>
            </tr>
            <tr>
                <td>Nama Dosen</td>
                <td><input type="text" name="Nama_dosen" value="<?php echo $row['Nama_dosen']; ?>"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <input type="text" name="Status" value="<?php echo $row['Status']; ?>">
                </td>
            </tr>
            <tr>
                <td>Sex</td>
                <td>
                    <input type="text" name="Sex" value="<?php echo $row['Sex']; ?>">
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><input type="text" name="Agama" value="<?php echo $row['Agama']; ?>"></td>
            </tr>
            <tr>
                <td>Login</td>
                <td><input type="text" name="Login" value="<?php echo $row['Login']; ?>"></td>
            </tr>
            <tr>
                <td>Pass</td>
                <td><input type="text" name="Pass" value="<?php echo $row['Pass']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea cols="20" rows="5" name="Alamat"><?php echo $row['Alamat']; ?> </textarea></td>
            </tr>
            <tr>
                <td>Kota</td>
                <td>
                    <input type="text" name="Kota" value="<?php echo $row['Kota']; ?>">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="Email" value="<?php echo $row['Email']; ?>"></td>
            </tr>
            <tr>
                <td>No. Hp</td>
                <td><input type="text" name="No_hp" value="<?php echo $row['No_hp']; ?>"></td>
            </tr>
            <tr>
                <td>Salary</td>
                <td><input type="text" name="Salary" value="<?php echo $row['Salary']; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        <?php
        }
        ?>
    </table>
</form>