<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login App</title>
  <!-- Favicon -->
  <link href="<?= BASE_URL; ?>/img/brand/agriculture.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?= BASE_URL; ?>/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="<?= BASE_URL; ?>/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="<?= BASE_URL; ?>/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body class="bg-gradient-default">
  <div class="main-content">
    <div class="container mt-7 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
        <?php Flasher::flash(); ?>
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5 text-center">
              <div class="text-center display-5 mb-4">
              Masuk untuk melanjutkan
              </div>
              <form role="form" action="<?= BASE_URL; ?>/Auth/validate" method="post">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
                    </div>
                    <input class="form-control" placeholder="Username" type="text" name="username" autofocus required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <input class="form-control" id="password" placeholder="Password" type="password" name="password" required>
                    <div class="input-group-prepend" onclick="switchVisibility()">
                      <span class="input-group-text">
                          <i class="fas fa-eye" id="icon"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-block btn-primary my-4">Sign in</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?= BASE_URL; ?>/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?= BASE_URL; ?>/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="<?= BASE_URL; ?>/js/argon.js"></script>
  <script>
        const passwordField = document.querySelector('#password');
        const iconclass = document.getElementById('icon');

        function switchVisibility() {
          if (passwordField.getAttribute('type') === 'password') { 
              passwordField.setAttribute('type', 'text');
              iconclass.className += "-slash";
           } else {
               passwordField.setAttribute('type', 'password'); 
            //   document.getElementById("myDIV").className = "mystyle";
               iconclass.className = "fas fa-eye";
               
           }
        }
  </script>
</body>

</html>