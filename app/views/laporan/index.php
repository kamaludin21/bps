<!-- Main Content -->
<div class="row">
    <div class="col">
    <?php Flasher::flash(); ?>
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Laporan Rekapitulasi</h3>
            </div>
          </div>
        </div>
        
        <div class="table-responsive px-3">
          <table id="myTable" class="table align-items-center table-striped table-bordered table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" width="20px">#</th>
                <th scope="col">Tahun</th>
                <th scope="col">Periode</th>
                <th scope="col">Kelengkapan</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            
            <tbody>
            <?php $i = 1; foreach($data['rekap'] as $rekap): ?>
              <tr>
              <td><?= $i; ?>.</td>
                <th scope="row">
                  <div class="media align-items-center">
                    <div class="media-body">
                      <span class="mb-0 text-sm"><?= $rekap['tahun']; ?></span>
                    </div>
                  </div>
                </th>
                <td>
                Triwulan <?= $rekap['periode']; ?>
                </td>
                <!-- For Percentage -->
                <?php $count = ($rekap['jumlah_kab']/$data['kab']['COUNT(id)'])*100 ?>
                <td> 
                  <div class="d-flex align-items-center">
                    <span class=""><?php $rekap['jumlah_kab']?><?php $data['kab']['COUNT(id)'] ?></span>
                    <div>
                      <div class="progress">
                        <div class="progress-bar bg-gradient-<?= ($count == 100) ? 'success' : 'danger' ?>" role="progressbar" aria-valuenow="<?= round($count) ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= round($count) ?>%;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                <a href="<?= BASE_URL; ?>/Laporan/detail/<?= $rekap['id_rekap']; ?>" class="badge badge-pill badge-default">Selengkapnya</a>
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