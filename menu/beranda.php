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
                        <h1>Beranda</h1>
                    </div>

                    <div class="row">

                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-primary">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Program Studi</h4>
                                    </div>
                                    <div class="card-body" style="margin-top: 8px">
                                        Teknik Informatika
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-warning">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Level Pengguna</h4>
                                    </div>
                                    <div class="card-body" style="margin-top: 8px">
                                        <?php echo $online['level']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card card-statistic-1">
                                <div class="card-icon bg-danger">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Jumlah Mahasiswa</h4>
                                    </div>
                                    <div class="card-body" style="margin-top: 8px">
                                        <?php echo mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_pengguna")); ?>
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

    <?php include_once '../layout/script.php'; ?>

</body>

</html>