<?php

session_start();

date_default_timezone_set('Asia/Jakarta');

$DB_HOST = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_NAME = "db_skripsi_riska";

$conn = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
