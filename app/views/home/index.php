<div class="row">
  <div class="col">
  <?php Flasher::flash(); ?>
    <div class="card shadow">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Aktivitas Terbaru</h3>
          </div>
        </div>
      </div>
      <div class="table-responsive px-3">
        <table id="myTable" class="table align-items-center table-striped table-bordered table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tahun - Periode</th>
              <th scope="col">Kabupaten</th>
              <th scope="col">Tanggal Input</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1; foreach($data['laporan'] as $rekap): ?>
            <tr>
              <td>
                <?= $i; ?>.
              </td>
              <th scope="row">
                <div class="media align-items-center">
                  <div class="media-body">
                    <span class="mb-0 text-sm"><?= $rekap['tahun']; ?> - Triwulan <?= $rekap['periode']; ?></span>
                  </div>
                </div>
              </th>
              <td>
              <?= $rekap['nama']; ?>
              </td>
              <td>
              <?= $rekap['createDate']; ?>
              </td>
              <td>
                <a href="<?= BASE_URL; ?>/Laporan/komoditas/<?= $rekap['token']; ?>" class="badge badge-pill badge-default">Lihat Data</a>
              </td>
            </tr>
            <?php $i++; endforeach; ?>
          </tbody>
        </table>
      </div>
      <br>
    </div>
  </div>
</div>