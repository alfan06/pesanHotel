<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body>
    <?php
    include "connection.php";

    session_start();

    if ($_SESSION['status'] == 'login_admin') {
        ?>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
          <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="">AN Creative admin</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"aria-expanded="false">Manage</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a class="nav-link(dropdown)" href="login_user.php">User</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"aria-expanded="false">Welcome ,<?php echo $_SESSION['username'] ?></a>
                    <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a class="nav-link(dropdown)" href="sessionLogoutAdmin.php">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link(dropdown)" href="single-product.html">Profil</a>
                    </li>
                    </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="container" style="padding: 20px; margin: 10 px auto; margin-left: auto; margin-right: auto;">
            <div class="row">
                <div class="col-lg-12" style="background-color: #f2f2f2; max-height: 2000px; max-width: 3000px; padding: 10px; border-radius: 25px;">
                    <center>
                        <h1>Tambah Buku</h1><br>
                    </center>
                    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="prosesUploadBuku.php" name="form1" id="form1">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="tagline">Tagline: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_buku" id="nama_buku" maxlength="95" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="harga">Harga: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="penerbit" name="penerbit" maxlength="45" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="harga2">Harga Diskon: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="penerbit" name="penerbit" maxlength="45" required>
                            </div>
                        </div>
                        <label class="control-label col-sm-2" for="file">Foto konten: </label>
                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left">
                                <span>Choose file</span>
                                <input type="file" name="nama_file" id="nama_file" required>
                            </div>
                            <br>
                        </div>
                        <br>
                        <br>
                        <center>
                            <button style="width:150px;height:40px;font-size:20px;" type="reset" class="btn btn-danger" value="Reset">Reset</button>
                            <button style="width:150px;height:40px;font-size:20px;" type="submit" class="btn btn-success" value="Simpan">Simpan</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
        <?php
        } else {
            header("Refresh:0; url=login_admin.php");
        }
        ?>
</body>

</html>