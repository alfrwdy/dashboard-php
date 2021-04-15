<?php
require_once "../layout/header.php";
require_once "../helper/connection.php";
$result = mysqli_query($connection, "select * from dosen");
?>
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Dosen</h3>
                <a href="create.php" class="btn btn-info mb-3">Tambah Data</a>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dosen</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Aksi</th>
                            <th>NIK</th>
                            <th>Inisial</th>
                            <th>Nama Dosen</th>
                            <th>Tanggal Lahir</th>
                            <th>Status</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Login</th>
                            <th>Password</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>Email</th>
                            <th>No.hp</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($data = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td class="text-nowrap">
                                    <a class="btn btn-sm btn-danger mb-md-0 mb-1 px-2" href="delete.php?nik=<?= $data['NIK'] ?>" onclick="return confirm('Are you sure you want to delete ?')">
                                        <i data-feather="trash-2" width="10"></i>
                                    </a>
                                    <a class="btn btn-sm btn-info px-2" href="edit.php?nik=<?= $data['NIK'] ?>">
                                        <i data-feather="edit" width="10"></i>
                                    </a>
                                </td>
                                <td><?php echo $data["NIK"] ?></td>
                                <td><?php echo $data["Inisial"] ?></td>
                                <td><?php echo $data["Nama_dosen"] ?></td>
                                <td><?php echo $data["tanggal"] ?></td>
                                <td><?php echo $data["Status"] ?></td>
                                <td><?php echo $data["Sex"] ?></td>
                                <td><?php echo $data["Agama"] ?></td>
                                <td><?php echo $data["Login"] ?></td>
                                <td><?php echo $data["Pass"] ?></td>
                                <td><?php echo $data["Alamat"] ?></td>
                                <td><?php echo $data["Kota"] ?></td>
                                <td><?php echo $data["Email"] ?></td>
                                <td><?php echo $data["No_hp"] ?></td>
                                <td><?php echo $data["Salary"] ?></td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
<?php
require_once "../layout/footer.php"
?>