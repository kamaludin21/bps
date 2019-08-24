<!-- Main Content -->
<div class="row">
    <div class="col">
    <?php Flasher::flash(); ?>
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Laporan Rekapitulasi Data</h3>
            </div>
          </div>
        </div>
        
        <div class="table-responsive px-3">
          <table id="myTable" class="table align-items-center table-striped table-bordered table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" width="20px">#</th>
                <th scope="col">Kabupaten</th>
                <th scope="col">Periode</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php $i = 1; foreach($data['laporan'] as $rekap): ?>
              <tr>
              <td><?= $i; ?>.</td>
                <th scope="row">
                  <div class="media align-items-center">
                    <div class="media-body">
                      <span class="mb-0 text-sm"><?= $rekap['nama']; ?></span>
                    </div>
                  </div>
                </th>
                <td>
                <?= $rekap['tahun']; ?> - Triwulan <?= $rekap['periode']; ?>
                </td>
                <td>
                <a href="<?= BASE_URL; ?>/Laporan/komoditas/<?= $rekap['token']; ?>" class="badge badge-pill badge-default">Lihat Data</a>
                <a href="<?= BASE_URL; ?>/Laporan/cetak/<?= $rekap['token']; ?>" target="_blank" class="badge badge-pill badge-warning">Cetak Laporan</a>
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
<!-- Main Content -->