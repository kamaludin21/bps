<div class="row">
  <div class="col">
    <div class="card shadow">
      <div class="card-header bg-transparent">
        <div class="row">
        <div class="col">
          <h3 class="mb-0">Komoditas Provinsi Riau</h3>
          <small class="text-muted">
          Hai, selamat datang di Insight, silahkan pilih item anda, untuk menyesuaikan grafik

          </small>
        </div>
        
        </div>
      </div>
      <div class="card-body bg-lighter">
        <div class="row">
        <div class="container mt--3">
            <h3 class="mb-0 lead">Pilih Periode</h3>
            <form action="<?= BASE_URL ?>/Komoditas/getLaporanGrafik" method="POST">
            <div class="row">
                <div class="col-8">
                <div class="form-group">
                    <select class="custom-select custom-select-alternative" name="token">
                    <?php foreach($data['choice'] as $lapor) : ?>
                        <option value="<?= $lapor['token']; ?>"><?= $lapor['tahun']; ?> - Periode <?= $lapor['periode']; ?>, <?= $lapor['nama'] ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
                </div>
    
                <div class="col">
                <div class="form-group">
                    <button class="btn btn-icon btn-3 btn-primary" type="submit">
                    <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
                    <span class="btn-inner--text">Konfirmasi</span>
                    </button>
                </div>
              </div>
            </div>
            </form>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <br>
<!-- Grafik -->
<div class="row">
  <div class="col">
    <div class="card shadow">
      <div class="card-header bg-transparent">
        <div class="row">
        <div class="col">
          <h3 class="mb-0"><?= $data['laporan']['nama']; ?>, <?= $data['laporan']['tahun']; ?> - Periode <?= $data['laporan']['periode']; ?>
 </h3>
        </div>
        
        </div>
      </div>
      <div class="card-body bg-lighter">
        <div class="row">
        <div class="container">
        <canvas id="myChart"></canvas>
        
        <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
            labels: [<?php foreach($data['komoditas'] as $komo) : ?> '<?= $komo['komoditas'] ?>', <?php endforeach; ?>],
                datasets: [{
                    label: 'Jumlah Komoditas',

                    <?php $sum = $komo['item1']+$komo['item3']+$komo['item4']+$komo['item5']+$komo['item6']+$komo['item7']; ?>
                    
                    data: [
                        <?php foreach($data['komoditas'] as $komo) : ?>

                        '<?= $komo['item1']+$komo['item3']+$komo['item4']+$komo['item5']+$komo['item6']+$komo['item7']; ?>',

                        <?php endforeach; ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        </script>
        </div>
      </div>
      </div>
    </div>
  </div>
  </div>
  <br>

  