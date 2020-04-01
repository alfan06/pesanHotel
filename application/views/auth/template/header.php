<!-- <!doctype html>
<html lang="en">

<head> -->
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title><?php echo $title ?></title>
    <script>
        function passwordShowUnshow() {
            var x = document.getElementById("password");
            var y = document.getElementById("passwordConf");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
        }
    </script>
    <style>
        .badge {
            margin-left: 3px;
        }
    </style>
</head>

<body> -->
    <!-- navbar -->
    <!-- <nav class="navbar navbar-expand-lg navbar navbar-dark" style="background-color: green">
        <a class="navbar-brand" href="<?= base_url(); ?>">Hotel AZA(AL&REZ)</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="<?= base_url(); ?>auth/login">Login</a>
                <a class="nav-item nav-link" href="<?= base_url(); ?>auth/register">Register</a>
            </div>
        </div>
    </nav> -->

    <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hotel AZA(AL&REZ)</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/interface/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?= base_url('assets/interface/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet')">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/interface/css/grayscale.min.css" rel="stylesheet">

  <script>
        function passwordShowUnshow() {
            var x = document.getElementById("password");
            var y = document.getElementById("passwordConf");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
        }
    </script>
    <style>
        .badge {
            margin-left: 3px;
        }
    </style>

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Hotel AZA(AL&REZ)</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>auth/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>auth/register">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

   <!-- Header -->
   <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">Hotel AZA(AL&REZ)</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">"Ur Favorit place"</h2>
      </div>
    </div>
  </header>

