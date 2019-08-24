<div class="row">
  <div class="col">
    <h1 class="display-2 text-white"><?= $data['kab']['nama']; ?></h1>
  </div>
</div>
<br>
<div class="row">
  <div class="col">
  <?php Flasher::flash(); ?>
    <div class="card shadow">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Rekapitulasi yang belum terisi</h3>
          </div>
        </div>
      </div>
      <div class="table-responsive px-3">
        <table id="myTable" class="table align-items-center table-striped table-bordered table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col" style="width:20px">#</th>
              <th scope="col">Tahun</th>
              <th scope="col">Triwulan</th>
              <th scope="col">Detail</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1; foreach($data['laporan'] as $rekap): ?>
            <tr>
            <td><?= $i; ?></td>
              <th scope="row">
                <div class="media align-items-center">
                  <div class="media-body">
                    <span class="mb-0 text-sm"><?= $rekap['tahun']; ?></span>
                  </div>
                </div>
              </th>
              <td>
              <?= $rekap['periode']; ?>
              </td>
              <td>
                <a href="<?= BASE_URL; ?>/Laporan/formLaporan/<?= $rekap['id']; ?>" class="badge badge-pill badge-default">Isi Data</a>
              </td>
            </tr>
            <?php $i++; endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="card-footer py-4">
        <nav aria-label="...">
          <ul class="pagination justify-content-end mb-0">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">
                <i class="fas fa-angle-left"></i>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">
                <i class="fas fa-angle-right"></i>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>