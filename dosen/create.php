<?php
require_once "../layout/header.php";
require_once "../helper/connection.php";
?>
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title ">Form Dosen</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">NIK</label>
                                        <input type="text" id="nik" class="form-control" placeholder="NIK" name="NIK">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="inisial">Inisial</label>
                                        <input type="text" id="inisial" class="form-control" placeholder="Inisial" name="Inisial">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nama dosen">Nama Dosen</label>
                                        <input type="text" id="city-column" class="form-control" placeholder="Nama Dosen" name="city-column">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="tanggal lahir">Tanggal Lahir</label>
                                        <input type="date" id="country-floating" class="form-control" name="country-floating" placeholder="Tanggal Lahir">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <label for="status">Status</label>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect">
                                            <option>Tetap</option>
                                            <option>Luar Biasa</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-12">
                                    <label for="jeniskelamin">Jenis Kelamin</label>
                                    <div class="form-group">
                                        <select class="form-select" id="basicSelect">
                                            <option>Laki Laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <select class="form-select" id="basicSelect">
                                            <option>Islam</option>
                                            <option>Kristen Protestan</option>
                                            <option>Kristen Katolik</option>
                                            <option>Hindu</option>
                                            <option>Buddha</option>
                                            <option>Konghucu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="login">Login</label>
                                        <input type="text" id="city-column" class="form-control" placeholder="Login" name="city-column">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" id="first-name-column" class="form-control" placeholder="Password" name="fname-column">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="password">Ketik Ulang Password</label>
                                        <input type="password" id="first-name-column" class="form-control" placeholder="Ulang Password" name="fname-column">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="textarea" id="Alamat" class="form-control" placeholder="Alamat" name="lname-column">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="kota">kota</label>
                                        <input type="text" id="city-column" class="form-control" placeholder="Kota" name="city-column">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <label for="email">Email</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Email">
                                        <span class="input-group-text" id="basic-addon2">@gmail.com</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nohp">no. Hp</label>
                                        <input type="text" id="last-name-column" class="form-control" placeholder="Nomor Handphone" name="lname-column">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="salary">Gaji</label>
                                        <input type="text" id="city-column" class="form-control" placeholder="Gaji" name="city-column">
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // Basic multiple Column Form section end -->

<?php
require_once "../layout/footer.php";
?>