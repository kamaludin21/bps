<div class="row">
  <div class="col">
  <?php Flasher::flash(); ?>
    <div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Data Daerah</h3>
            </div>
            <div class="col text-right">
                <a href="#!" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-form">Tambah Kabupaten</a>
            </div>
        </div>
    </div>
      <div class="table-responsive px-3">
        <table id="myTable" class="table align-items-center table-striped table-bordered table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col" width="20px;">#</th>
              <th scope="col">Nama Daerah</th>
              <th scope="col">Jumlah Pengguna</th></th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1; foreach($data['kab'] as $kab): ?>
            <tr>
              <td>
                <?= $i; ?>.
              </td>
              <td>
              <?= $kab['nama']; ?>
              </td>
              <td>
              <?= $kab['jumlah_user']; ?>
              </td>
              <td>
              <a href="<?= BASE_URL ?>/Daerah/detail/<?= $kab['id']; ?>" class="badge badge-pill badge-default">Edit</a>

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

<!-- Modal -->
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
    <div class="modal-body p-0">
        <div class="card bg-secondary shadow border-0">
        <div class="card-header bg-transparent">
            <div class="card-body px-lg-2 py-lg-2">
                <div class="text-center text-muted mb-4">
                    <h4 class="text-uppercase">Tambah data kabupaten</h4>
                </div>
                <form action="<?= BASE_URL; ?>/Daerah/addKab" method="POST" role="form">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-building"></i></span>
                      </div>
                      <input class="form-control" name="nama" placeholder="Nama Kabupaten" type="text">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary my-4">Konfirmasi</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>
</div>
<!-- End Modal -->