<!-- Main Content -->
<div class="row">
    <div class="col">
        <div class="card shadow">
        <form action="<?= BASE_URL; ?>/laporan/addLaporan" method="POST">
        <input type="hidden" name="idRekap" value="<?= $data['rekap']['id']; ?>">
        <input type="hidden" name="idKab" value="<?= $_SESSION['idKab']; ?>">
        <input type="hidden" name="token" value="<?= $token = uniqid(); ?>">
        <div class="card-header border-0">
            <div class="row align-items-center">
            <div class="col col-sm-6">
                <h3 class="mb-0">Isi Data Tahun <strong><?= $data['rekap']['tahun']; ?></strong> - Triwulan <strong><?= $data['rekap']['periode']; ?></strong></h3>
            </div>
            <div class="col-4 col-sm-6 text-right">
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
            </div>
        </div>
        <div class="table-responsive" id="app">
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
                <tr v-for="row in rows" track-by="$index">
                <td>
                    <button class="btn btn-danger btn-sm" @click="removeRow($index)">
                        <span class="btn-inner--icon"><i class="ni ni-fat-remove"></i></span>
                    </button>
                    <button class="btn btn-icon btn-success btn-sm" @click="addRow($index)">
                        <span class="btn-inner--icon"><i class="ni ni-bullet-list-67"></i></span>
                    </button>
                <td>
                <input name="komoditas[]" type="text" placeholder="Komoditas" onkeypress="this.style.width = ((this.value.length + 1) * 8) + 'px';" required>
                </td>
                <td><input name="item1[]" type="text" style="width:40px;" autofocus placeholder="isi" onkeypress="this.style.width = ((this.value.length + 3) * 5) + 'px';" required></td>
                <td><input name="item2[]" type="text" style="width:40px;" placeholder="isi" onkeypress="this.style.width = ((this.value.length + 1) * 8) + 'px';" required></td>
                <td><input name="item3[]" type="text" style="width:40px;" placeholder="isi" onkeypress="this.style.width = ((this.value.length + 1) * 8) + 'px';" required></td>
                <td><input name="item4[]" type="text" style="width:40px;" placeholder="isi" onkeypress="this.style.width = ((this.value.length + 1) * 8) + 'px';" required></td>
                <td><input name="item5[]" type="text" style="width:40px;" placeholder="isi" onkeypress="this.style.width = ((this.value.length + 1) * 8) + 'px';" required></td>
                <td><input name="item6[]" type="text" style="width:40px;" placeholder="isi" onkeypress="this.style.width = ((this.value.length + 1) * 8) + 'px';" required></td>
                <td><input name="item7[]" type="text" style="width:40px;" placeholder="isi" onkeypress="this.style.width = ((this.value.length + 1) * 8) + 'px';" required></td>
                <td><input name="item8[]" type="text" style="width:40px;" placeholder="isi" onkeypress="this.style.width = ((this.value.length + 1) * 8) + 'px';" required></td>
                <td><input name="item9[]" type="text" placeholder="Keterangan" onkeypress="this.style.width = ((this.value.length + 1) * 8) + 'px';" required></td>
                <td></td>
                </tr>
            </tbody>
            </table>
        </div>
        </form>
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