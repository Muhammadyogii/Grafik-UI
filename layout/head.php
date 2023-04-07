<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Admin Visualisasi Data</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<link rel="stylesheet" href="../vendor/node_modules/jqvmap/dist/jqvmap.min.css">
<link rel="stylesheet" href="../vendor/node_modules/summernote/dist/summernote-bs4.css">
<link rel="stylesheet" href="../vendor/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="../vendor/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/components.css">

<?php
if (isset($_SESSION['userid'])) {
    $userid = $_SESSION['userid'];
    $syntax = mysqli_query($conn, "SELECT * FROM tb_pengguna WHERE id_pengguna = '$userid'");
    $online = mysqli_fetch_array($syntax);
} else {
    header("Location: ../index");
}
?>