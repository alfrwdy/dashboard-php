<?php
session_start();
require_once "../layout/header.php";
require_once "../helper/connection.php";
$result = mysqli_query($connection, "select * from mata_kuliah");
?>
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Mata Kuliah</h3>
                <a href="create.php" class="btn btn-info mb-3">Tambah Data</a>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../dashboard/index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mata Kuliah</li>
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
                            <th>Id Matkul</th>
                            <th>Nama Mata Kuliah</th>
                            <th>SKS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($data = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td class="text-nowrap">
                                    <a class="btn btn-sm btn-danger mb-md-0 mb-1 px-2" href="delete.php?nim=<?= $data['NIM'] ?>" onclick="return confirm('Are you sure you want to delete ?')">
                                        <i data-feather="trash-2" width="10"></i>
                                    </a>
                                    <a class="btn btn-sm btn-info px-2" href="edit.php?nim=<?= $data['NIM'] ?>">
                                        <i data-feather="edit" width="10"></i>
                                    </a>
                                </td>
                                <td><?php echo $data["Mk_id"] ?></td>
                                <td><?php echo $data["Nama_mk"] ?></td>
                                <td><?php echo $data["Sks"] ?></td>
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