<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Document</title>
  <!-- favicon top -->
  <link rel="shortcut icon" href="assets/img/favicon.png">
  <!-- css boostrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
  <!-- font -->
  <link rel="stylesheet" href="assets/plugins/font-awesome-4.6.3/css/font-awesome.min.css" type="text/css">
  <!-- theme -->
  <link rel="stylesheet" href="assets/css/AdminLTE.min.css" type="text/css">
  <!-- custom -->
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>

<body class="login-page bg-login">
  <div class="loginn-box">
    <div class="login-logo" style="color: #3c8dbc;">
      <img src="assets/img/logo-blue.png" alt="logo" style="margin-top: 12px" height="50"> <b>Point Of Sales</b>
    </div>

    <?php
    if (empty($_GET['alert']))
      echo '';
    elseif ($_GET['alert'] == 1) {
      echo "<div class='alert alert-danger alert-dismissable'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <h4><i class='icon fa fa-times-circle'></i>Gagal Login!!!</h4>
            Email atau Password Salah, cek kembali Username & Password Anda.
            </div>";
    } elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-sucess alert-dismissable'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <h4><i class='icon fa fa-check-circle'></i>Sukses !!!</h4>
            Anda berhasil logout.
            </div>";
    }
    ?>

    <div class="login-box-body">
      <p class="login-box-msg">
        <i class="fa fa-user icon-title">Silahkan Login</i>
      </p>
      <br>

      <form action="login-check.php" method="post">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="email" placeholder="Email" autocomplete="off" required>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <br>
        <div class="row">
          <div class="col-xs-12">
            <input type="submit" value="Login" name="login" class="btn btn-primary btn-lg btn-block btn-flat">
          </div>
        </div>
      </form>
    </div>
  </div>

  <script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>