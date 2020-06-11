<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/fontawesome-free/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>LOGIN</b>Page</a>
    </div>

    <!-- /.login-logo -->
    <div class="card">

      <div class="card-body login-card-body">


        <div class="card-body login-card-body">
          <p class="login-box-msg"></p>
          <?php echo $this->session->flashdata('pesan'); ?>
          <form action="<?php echo base_url('auth/login'); ?>" method="post" class="user">
            <div class="input-group mb-3">
              <input type="text" class="form-control" id="username" name="username" placeholder="Username">
              <?= form_error('username', ' <small ml-2 class="text-danger" pl-3>', '</small>'); ?>
              <div class="input-group-append">
                <div class="input-group-text">

                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              <?= form_error('password', ' <small ml-2 class="text-danger" pl-4>', '</small>'); ?>

              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="col-13">

              <button type="submit" class="btn btn-primary form-control">Login</button>
            </div>

            <!-- /.col -->
            <div class="row">
              <div class="col-10">
                <p class="mb-0">
                  <hr>
                  <a href="<?php echo base_url('registrasi'); ?>" class="text-center">Belum Punya Akun? Daftar</a>
                </p>

              </div>
              <!-- /.col -->
            </div>
          </form>


          <!-- /.social-auth-links -->



        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->