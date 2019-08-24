<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SIM HORTI</title>
  <!-- Favicon -->
  <link href="<?= BASE_URL; ?>/img/brand/agronomy.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?= BASE_URL; ?>/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="<?= BASE_URL; ?>/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- Argon CSS -->
  <link type="text/css" href="<?= BASE_URL; ?>/css/argon.css" rel="stylesheet">
  <link type="text/css" href="<?= BASE_URL; ?>/css/style.css" rel="stylesheet">
  <link type="text/css" href="<?= BASE_URL; ?>/css/docs.min.css" rel="stylesheet">
  <link type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
  <link type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>

<body>
  <!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="<?= BASE_URL; ?>/Home/">
        <h1 class="display-4">SIM HORTI</h1>
      </a>
      <?php if($_SESSION['login'] == true ) { ?>
      <!-- User Mobile -->
      <ul class="nav align-items-center d-md-none"> 
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="<?= BASE_URL; ?>/img/avatar.png">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow text-uppercase text-underline m-0">Welcome, <?= $_SESSION["username"]; ?></h6>
            </div>
            <a href="<?= BASE_URL; ?>/Users/profil" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="<?= BASE_URL; ?>/Users/password" class="dropdown-item">
              <i class="ni ni-lock-circle-open"></i>
              <span>Password</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item" data-toggle="modal" data-target="#modal-notification">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <?php } ?>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="<?= BASE_URL; ?>">
                <h1 class="display-4">SIM HORTI</h1>
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <?php if($_SESSION['login'] == true ) { ?>
        <!-- Navigation -->
        <ul class="navbar-nav mt--2">
          <li class="nav-item">
            <a class="nav-link <?= $data['home']; ?>" href="<?= BASE_URL; ?>/Home">
              <i class="ni ni-tv-2 text-blue"></i> Beranda
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $data['statuslap']; ?>" href="<?= BASE_URL; ?>/Laporan">
              <i class="ni ni-briefcase-24 text-green"></i> Laporan
            </a>
          </li>
          <?php if($_SESSION['level'] == 1) { ?>
          <li class="nav-item">
            <a class="nav-link <?= $data['statuskom'] ?>" href="<?= BASE_URL ?>/Komoditas">
              <i class="ni ni-chart-bar-32 text-orange"></i> Insight
            </a>
          </li>
        </ul>
        <?php } ?>
        <?php } ?>
        
        <?php if($_SESSION['level'] == 1 ) { ?>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Requirements</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link <?= $data['statusrekap']; ?>" href="<?= BASE_URL; ?>/Rekap">
              <i class="ni ni-calendar-grid-58"></i> Periode
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $data['statuskab']; ?>" href="<?= BASE_URL; ?>/Daerah">
              <i class="ni ni-building"></i> Data Daerah
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $data['statuser']; ?>" href="<?= BASE_URL; ?>/Users">
              <i class="ni ni-settings"></i>Manajemen User
            </a>
          </li>
        </ul>
        
        <?php } ?>
        
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="javascript:void(0)"><?= $data['title']; ?></a>
        
        <?php if($_SESSION['login'] == false ) { ?>
        <!-- User Desktop -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <a class="btn btn-icon btn-3 btn-primary" href="<?= BASE_URL; ?>">
            	<span class="btn-inner--icon"><i class="ni ni-spaceship"></i></span>
            
                <span class="btn-inner--text">Login Page</span>
            
            </a>
        </ul>
        <?php } ?>
        <?php if($_SESSION['login'] == true ) { ?>
        <!-- User Desktop -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="<?= BASE_URL; ?>/img/avatar.png">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome, <?= $_SESSION['username'] ?></h6>
              </div>
              <a href="<?= BASE_URL; ?>/Users/profil" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="<?= BASE_URL; ?>/Users/password" class="dropdown-item">
                <i class="ni ni-lock-circle-open"></i>
                <span>Password</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="" class="dropdown-item" data-toggle="modal" data-target="#modal-notification">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
        <?php } ?>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-default pb-8 pt-5 pt-md-8 ">
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--9">
    
        
        