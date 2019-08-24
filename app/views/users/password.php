<div class="row">
    <div class="col-xl-8 order-xl-1">
        <?php Flasher::flash(); ?>
        <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
            <div class="col-8">
                <h3 class="mb-0">Ubah Password</h3>
            </div>
            </div>
        </div>
        <div class="card-body">
        <form action="<?= BASE_URL; ?>/Auth/editPassword" method="POST" role="form">
        <input type="hidden" name="id" value="<?= $_SESSION['id']; ?>"> 
        <div class="form-group">
            <label class="form-control-label" for="username">Password<small>(Password lama anda)</small></label>
            <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-satisfied"></i></span>
                </div>
                <input class="form-control" placeholder="Password lama" type="password" name="passwordLama" autofocus autocomplete="off" required>
            </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="form-group">
            <label class="form-control-label" for="pw1">Password Baru</label>
              <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                </div>
                <input class="form-control" id="pw1" placeholder="Password Baru" type="password" name="passwordBaru" required>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col">
            <div class="form-group">
            <label class="form-control-label" for="pw2">Konfirmasi Password Baru</label>
              <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                </div>
                <input class="form-control" id="pw2" placeholder="Konfirmasi Password Baru" type="password" name="passwordBaruK" required>
              </div>
            </div>
          </div>
        </div>
        
        <hr class="my-4">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
      <script type="text/javascript">

      window.onload = function () {
          document.getElementById("pw1").onchange = validatePassword;
          document.getElementById("pw2").onchange = validatePassword;
      }
      function validatePassword(){
          var pass2=document.getElementById("pw2").value;
          var pass1=document.getElementById("pw1").value;
          if(pass1!=pass2)
              document.getElementById("pw2").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
          else
              document.getElementById("pw2").setCustomValidity('');
      }
  </script>
    </div>
    </div>
</div>
<hr>