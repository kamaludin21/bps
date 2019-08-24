<div class="row">
    <div class="col-xl-8 order-xl-1">
        <?php Flasher::flash(); ?>
        <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Data Detail Pengguna</h3>
            </div>
            </div>
        </div>
        <div class="card-body">
        <form action="<?= BASEURL; ?>/Profil/editProfil" method="POST" role="form">
        <input type="hidden" name="id" value="<?= $data['user']['id']; ?>"> 
        <div class="form-group">
            <label class="form-control-label" for="username">Username <small>(Digunakan untuk login)</small></label>
            <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                </div>
                <input class="form-control" placeholder="Username" type="text" name="username" value="<?= $data['user']['username']; ?>" required>
            </div>
        </div>
        
        
        <hr class="my-4">
        <p class="lead">
            <small>Perubahan akan tampak setelah anda melakukan log in ulang.</small>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
    </div>
</div>
<hr>