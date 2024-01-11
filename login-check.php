<?php

require_once 'config/database.php';

$username = mysqli_real_escape_string(
  $mysqli,
  stripslashes(strip_tags(htmlspecialchars(trim($_POST['email']))))
);

$password = md5(
  mysqli_real_escape_string(
    $mysqli,
    stripslashes(strip_tags(htmlspecialchars(trim($_POST['email']))))
  )
);

if (!ctype_alnum($username) or !ctype_alnum($password)) {
  header('Location: index.php?alert=1');
} else {
  ($query = mysqli_query(
    $mysqli,
    "SELECT * FROM users WHERE email='$email' AND password='$password'"
  )) or die('Ada kesalahan pada query user: ' . mysqli_error($mysqli));
  $rows = mysqli_num_rows($query);

  if ($rows > 0) {
    $data = mysqli_fetch_assoc($query);
    session_start();
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['hak_akses'] = $data['hak_akses'];
    header('Location: main.php?module=beranda');
  } else {
    header('Location: index.php?alert=1');
  }
}
