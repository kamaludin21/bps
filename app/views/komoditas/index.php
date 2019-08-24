<div class="row">
  <div class="col">
    <div class="card shadow">
      <div class="card-header bg-transparent">
        <div class="row">
        <div class="col">
          <h3 class="mb-0">Komoditas Provinsi Riau</h3>
          <small class="text-muted">
          Hai, selamat datang di Insight, silahkan pilih item anda, untuk menyesuaikan grafik

          </small>
        </div>
        
        </div>
      </div>
      <div class="card-body bg-lighter">
        <div class="row">
        <div class="container mt--3">
            <h3 class="mb-0 lead">Pilih Periode</h3>
            <form action="<?= BASE_URL ?>/Komoditas/getLaporanGrafik" method="POST">
            <div class="row">
                <div class="col-8">
                <div class="form-group">
                    <select class="custom-select custom-select-alternative" name="token">
                    <?php foreach($data['laporan'] as $lapor) : ?>
                        <option value="<?= $lapor['token']; ?>"><?= $lapor['tahun']; ?> - Periode <?= $lapor['periode']; ?>, <?= $lapor['nama'] ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
                </div>
    
                <div class="col">
                <div class="form-group">
                    <button class="btn btn-icon btn-3 btn-primary" type="submit">
                    <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
                    <span class="btn-inner--text">Konfirmasi</span>
                    </button>
                </div>
              </div>
            </div>
            </form>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
  