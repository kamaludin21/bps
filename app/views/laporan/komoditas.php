<div class="row">
  <div class="col">
    <h1 class="display-2 text-white"><?= $data['laporan']['nama']; ?></h1>
  </div>
</div>
<div class="row">
  <div class="col">
    <div class="card bg-secondary shadow">
      <div class="card-header bg-white border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Periode Tahun <?= $data['laporan']['tahun']; ?> - Triwulan <?= $data['laporan']['periode']; ?></h3>
          </div>
          <div class="col text-right">
          <a href="<?= BASE_URL; ?>/Komoditas/edit/<?= $data['laporan']['token']; ?>" class="btn btn-sm btn-primary">Edit</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive px-3">
            <table id="myTable" class="table align-items-center table-striped table-bordered table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col">1</th>
                  <th scope="col">2</th>
                  <th scope="col">3</th>
                  <th scope="col">4</th>
                  <th scope="col">5</th>
                  <th scope="col">6</th>
                  <th scope="col">7</th>
                  <th scope="col">8</th>
                  <th scope="col">9</th>
                  <th scope="col">10</th>
                  <th scope="col">11</th>
                </tr>
              </thead>
              <tbody>
              <?php $i = 1; foreach($data['komoditas'] as $komo): ?>
                <tr>
                  <th scope="row">
                    <div class="media align-items-center">
                      <div class="media-body">
                        <span class="mb-0 text-sm"><?= $komo['komoditas']; ?></span>
                      </div>
                    </div>
                  </th>
                  <td><?= $komo['item1']; ?></td>
                  <td><?= $komo['item2']; ?></td>
                  <td><?= $komo['item3']; ?></td>
                  <td><?= $komo['item4']; ?></td>
                  <td><?= $komo['item5']; ?></td>
                  <td><?= $komo['item6']; ?></td>
                  <?php $sum = $komo['item1']+$komo['item3']+$komo['item4']+$komo['item5']+$komo['item6']+$komo['item7']; ?>
                  <td style="background-color: blue; color: white;"><?= number_format($sum); ?></td>
                  <td><?= $komo['item7']; ?></td>
                  <td><?= $komo['item8']; ?></td>
                  <td><?= $komo['item9']; ?></td>
                  
              <?php $i++; endforeach; ?>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
    </div>
  </div>
</div>
<section class="section section-lg pt-2">
  <div class="container">
    <div class="card bg-gradient-default shadow-lg border-0">
      <div class="p-5">
        <h3 class="text-white text-uppercase">Keterangan :</h3>
        <div class="row text-white">
            <div class="col-6">
                <li>Nama Komoditas : 1</li>
                <li>Tanaman dibongkar : 2</li>
                <li>Tanaman baru : 3</li>
                <li>Tanaman bulan menghasilkan : 4</li>
                <li>Yang menghasilkan : 5</li>
                <li>Yang sedang tidak menghasilkan : 6</li>
            </div>
            <div class="col-6">
                <li>Tanaman tua/rusak : 7</li>
                <li>Jumlah Total : 8</li>
                <li>Produksi (Kg) : 9</li>
                <li>Harga Jual : 10</li>
                <li>Keterangan : 11</li>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>