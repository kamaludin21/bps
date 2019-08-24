<!-- Table -->
<div class="row">
  <div class="col">
    <div class="card shadow">
      <div class="card-header bg-transparent">
        <div class="row">
        <div class="col">
          <h3 class="mb-0">Komoditas <?= $data['kab']['nama']; ?></h3>
        </div>
        <?php if($_SESSION['level'] == 1 ) { ?>
        <div class="col text-right">
          <a href="#!" class="btn btn-sm btn-primary disabled">Gambar</a>
          <button class="btn btn-sm btn-icon btn-2 btn-danger" type="button" data-toggle="modal" data-target="#modal-default">
            <span class="btn-inner--icon"><i class="ni ni-world"></i></span>
          </button>
        </div>
        <?php } ?>
        </div>
      </div>
      <div class="card-body bg-lighter">
        <div class="row">
        <?php foreach ($data['komoditas'] as $kab) : ?>  
        <div class="col-lg-4 col-md-6">
            <div class="color-swatch">
              <div class="color-swatch-header" style="background-image: url('<?= BASE_URL; ?>/img/fruits/<?= $kab['komoditas']; ?>.jpg'); background-size: cover;">
              </div>
              <div class="color-swatch-body">
              <h6 class="display-4"><?= $kab['komoditas']; ?></h6>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- End Table-->
