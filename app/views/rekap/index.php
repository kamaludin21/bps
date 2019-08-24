<!-- Main Content -->
<div class="row">
    <div class="col">
    <?php Flasher::flash(); ?>
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Rekapitulasi Data</h3>
            </div>
            <div class="col text-right">
              <a href="#!" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-form">Buka Periode Baru</a>
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
                                                <h4 class="text-uppercase">Buka Periode Rekap</h4>
                                            </div>
                                            <form role="form" action="<?= BASE_URL; ?>/Rekap/addRekap/" method="POST">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="year">Tahun</label>
                                                    <select class="custom-select custom-select-alternative" name="tahun">
                                                    <?php
                                                      $date = date(Y);
                                                      for ($i = 0; $i < 5; $i++) {
                                                    ?>  
                                                    <option value="<?= $date+$i; ?>"><?= $date+$i; ?></option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="triwulan">Triwulan</label>
                                                    <select class="custom-select custom-select-alternative" name="periode">
                                                      <option value="1">Triwulan 1</option>
                                                      <option value="2">Triwulan 2</option>
                                                      <option value="3">Triwulan 3</option>
                                                    </select>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-block btn-primary my-4">Submit</button>
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
        <div class="table-responsive px-3">
          <table id="myTable" class="table align-items-center table-striped table-bordered table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" width="20px">#</th>
                <th scope="col">Tahun</th>
                <th scope="col">Periode</th>
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