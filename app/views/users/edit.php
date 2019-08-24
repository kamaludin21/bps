<div class="row">
    <div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
            <div class="col-8">
                <h3 class="mb-0">Data Kabupaten</h3>
            </div>
            </div>
        </div>
        <div class="card-body">
            <form action="<?= BASE_URL; ?>/Users/edit" method="POST">
                <div class="row">
                    <input type="hidden" name="id" value="<?= $data['user']['id']; ?>">
             
                <div class="col-lg-6">
                    <div class="form-group">
                    <label class="form-control-label" >Nama User</label>
                    <input type="text" class="form-control form-control-alternative" name="nama" value="<?= $data['user']['username']; ?>" disabled>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="triwulan">Ubah Daerah</label>
                        <select class="custom-select custom-select-alternative" name="idKab">
                        <?php foreach($data['kab'] as $kab): ?>
                            <option value="<?= $kab['id'] ?>" <?= (($kab['id'] == $data['user']['idKab']) ? 'selected' : '') ?>><?= $kab['nama'] ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                </div>

            <hr class="my-4">
            <div class="row">
            <div class="col-auto">
            <button type="submit" class="btn btn-primary btn-rounded">simpan</button>
            </div>
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>