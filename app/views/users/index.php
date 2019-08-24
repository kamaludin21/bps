<div class="row">
  <div class="col">
  <?php Flasher::flash(); ?>
    <div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Data Pengguna</h3>
            </div>
            <div class="col text-right">
                <a href="#!" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-form">Tambah Pengguna</a>
            </div>
        </div>
    </div>
      <div class="table-responsive px-3">
        <table id="myTable" class="table align-items-center table-striped table-bordered table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col" width="20px;">#</th>
              <th scope="col">Username</th>
              <th scope="col">Daerah</th></th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1; foreach($data['user'] as $user): ?>
            <tr>
              <td>
                <?= $i; ?>.
              </td>
              <td>
              <?= $user['username']; ?>
              </td>
              <td>
              <?= $user['nama']; ?>
              </td>
              <td>
              <a href="<?= BASE_URL ?>/Users/editUser/<?= $user['id']; ?>" class="badge badge-pill badge-default" target="_blank">Edit</a>

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
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="text-uppercase">Tambah Data Pengguna</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-secondary">
      <form action="<?= BASE_URL; ?>/Users/addUsers/" method="POST" role="form"> 
        <div class="form-group">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
              </div>
              <input class="form-control" placeholder="Username" type="text" name="username" required>
            </div>
          </div>
          <div class="form-group">
            <div class="form-group">
                <select class="custom-select custom-select-alternative" name="idKab" required>
      
                  <?php foreach($data['kab'] as $kab): ?>
                    <option value="<?= $kab["id"]; ?>"><?= $kab["nama"]; ?></option>
                  <?php endforeach; ?>
                </select>
            </div>
          </div>
          <p>Password Default : <strong>12345678</strong></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End Modal -->