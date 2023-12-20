<?php

$server = 'locahost';
$username = 'root';
$password = '';
$database = 'aplikasi_pos';

$mysqli = new mysqli($server, $username, $password, $database);

if ($mysqli->connect_error) {
  die('Koneksi database gagal : ' . $mysqli->connect_error);
}
