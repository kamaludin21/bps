<div class="row">
  <div class="col">
    <h1 class="display-2 text-white"><?= $data['laporan']['nama']; ?></h1>
  </div>
</div>
<?php Flasher::flash(); ?>
<!-- Main Content -->
<div class="row">
    <div class="col">
        <div class="card shadow">
        
        <div class="card-header border-0 mb--3">
            <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Edit Data Tahun <strong><?= $data['laporan']['tahun']; ?></strong> - Triwulan <strong><?= $data['laporan']['periode']; ?></strong></h3>
                <p class="ct-lead text-muted">Harap menekan tombol simpan untuk menyimpan setiap baris</p>
            </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                <th scope="col">Aksi</th>
                <th scope="col">Komoditas</th>
                <th scope="col">1</th>
                <th scope="col">2</th>
                <th scope="col">3</th>
                <th scope="col">4</th>
                <th scope="col">5</th>
                <th scope="col">6</th>
                <th scope="col">7</th>
                <th scope="col">8</th>
                <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data['komoditas'] as $view) : ?>
                <tr>
                <form action="<?= BASE_URL; ?>/Komoditas/editKomoditas" method="POST">
                <input type="hidden" name="id" value="<?= $view['id']  ?>">
                <input type="hidden" name="token" value="<?= $view['token'] ?>">
                <td>
                    <button type="submit" class="btn btn-icon btn-success btn-sm">
                        <span class="btn-inner--icon"><i class="ni ni-send"></i></span>
                    </button>
                <td>
                <input name="komoditas" type="text" placeholder="Komoditas" value="<?= $view['komoditas']; ?>" onkeypress="this.style.width = ((this.value.length + 1) * 8) + 'px';" >
                </td>
                <td><input name="item1" value="<?= $view['item1'] ?>" type="text" style="width:40px;" autofocus placeholder="isi" onkeypress="this.style.width = ((this.value.length + 3) * 5) + 'px';" ></td>
                <td><input name="item2" value="<?= $view['item2'] ?>" type="text" style="width:40px;" placeholder="isi" onkeypress="this.style.width = ((this.value.length + 1) * 8) + 'px';" ></td>
                <td><input name="item3" value="<?= $view['item3'] ?>" type="text" style="width:40px;" placeholder="isi" onkeypress="this.style.width = ((this.value.length + 1) * 8) + 'px';" ></td>
                <td><input name="item4" value="<?= $view['item4'] ?>" type="text" style="width:40px;" placeholder="isi" onkeypress="this.style.width = ((this.value.length + 1) * 8) + 'px';" ></td>
                <td><input name="item5" value="<?= $view['item5'] ?>" type="text" style="width:40px;" placeholder="isi" onkeypress="this.style.width = ((this.value.length + 1) * 8) + 'px';" ></td>
                <td><input name="item6" value="<?= $view['item6'] ?>" type="text" style="width:40px;" placeholder="isi" onkeypress="this.style.width = ((this.value.length + 1) * 8) + 'px';" ></td>
                <td><input name="item7" value="<?= $view['item7'] ?>" type="text" style="width:40px;" placeholder="isi" onkeypress="this.style.width = ((this.value.length + 1) * 8) + 'px';" ></td>
                <td><input name="item8" value="<?= $view['item8'] ?>" type="text" style="width:40px;" placeholder="isi" onkeypress="this.style.width = ((this.value.length + 1) * 8) + 'px';" ></td>
                <td><input name="item9" value="<?= $view['item9'] ?>" type="text" placeholder="Keterangan" onkeypress="this.style.width = ((this.value.length + 1) * 8) + 'px';" ></td>
                </form>
                </tr>
            <?php endforeach; ?>
            </tbody>
            
            </table>
        </div>
        
        <br>
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
                    <li>Tanaman dibongkar : 1</li>
                    <li>Tanaman baru : 2</li>
                    <li>Tanaman bulan menghasilkan : 3</li>
                    <li>Yang menghasilkan : 4</li>
                    <li>Yang sedang tidak menghasilkan : 5</li>
                </div>
                <div class="col-6">
                    <li>Tanaman tua/rusak : 6</li>
                    <li>Produksi (Kg) : 7</li>
                    <li>Harga Jual : 8</li>
                    <li>Keterangan : 9</li>
                </div>
            </div>
        </div>
        </div>
    </div>
    </section>