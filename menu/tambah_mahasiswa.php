<?php include '../config/connection.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once '../layout/head.php'; ?>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <?php include_once '../layout/topbar.php'; ?>

            <?php include_once '../layout/sidebar.php' ?>

            <div class="main-content">

                <section class="section">
                    <div class="section-header">
                        <h1>Tambah Data Mahasiswa</h1>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary mr-3" data-toggle="modal" data-target="#add_data_mahasiswa">Tambah Mahasiswa</button>
                                <button type="submit" class="btn btn-warning mr-3" data-toggle="modal" data-target="#add_data_mahasiswa_kp">Tambah Mahasiswa KP</button>
                                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#add_data_mahasiswa_pkpm">Tambah Mahasiswa PKPM</button>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="card-subtitle">Data Mahasiswa</h6>
                                    </div>
                                    <div class="table-responsive p-3">
                                        <table class="table align-items-center table-flush" id="dataTable">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>NPM</th>
                                                    <th>Nama Mahasiswa</th>
                                                    <th>Peminatan</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="card-subtitle">Data Mahasiswa KP</h6>
                                    </div>
                                    <div class="table-responsive p-3">
                                        <table class="table align-items-center table-flush" id="dataTable">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Kode</th>
                                                    <th>NPM</th>
                                                    <th>Nama Mahasiswa</th>
                                                    <th>Peminatan</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="card-subtitle">Data Mahasiswa PKPM</h6>
                                    </div>
                                    <div class="table-responsive p-3">
                                        <table class="table align-items-center table-flush" id="dataTable">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Kode</th>
                                                    <th>NPM</th>
                                                    <th>Nama Mahasiswa</th>
                                                    <th>Peminatan</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>

            </div>

            <?php include_once '../layout/logout.php'; ?>

            <?php include_once '../layout/footer.php'; ?>

        </div>
    </div>

    <?php include_once '../layout/data_modal.php'; ?>

    <?php include_once '../layout/script.php'; ?>

</body>

</html>