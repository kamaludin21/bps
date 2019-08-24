<?php
require_once '../public/vendor/html2pdf/html2pdf.class.php';
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Laporan Rekapitulasi</title>
</head>
<style type="text/css">

  .head {
    margin-bottom: 50px;
  }
  
  .head h3 {
    margin: auto 0;
    text-align: center;
  }

  .head h5 {
    text-align: left;
  }
  .tg {
    width: 120%;
    border-collapse:collapse;
    border-spacing:0;
  }
  .tg td {
    font-family:Arial, sans-serif;
    font-size:14px;
    padding:10px 5px;
    border-style:solid;
    border-width:1px;
    overflow:hidden;
    word-break:normal;
    border-color:black;
  }
  .tg th {
    font-family:Arial, sans-serif;
    font-size:14px;
    font-weight:normal;
    padding:10px 5px;
    border-style:solid;
    border-width:1px;
    overflow:hidden;
    word-break:normal;
    border-color:black;
    }
  .tg .tg-c3ow {
    border-color:inherit;
    text-align:center;
    vertical-align:top
    }

  .tg .tg-xldj {
    border-color:inherit;
    text-align:left
    }

  .tg .tg-0pky {
    border-color:inherit;
    text-align:center;
    vertical-align:top
  }

  .blue {
    background: #215ab7;
  }

  .footer {
    margin-top: 50px;
    text-align: right;
    padding-right: 180px;

  }

  .left {
    text-align: left;
  }

</style>
<body>
  <div class="head">
    <h3>
      Laporan Tanaman Buah-buahan dan Tanamam Sayuran Tahunan
    </h3>

    <h5>
      Kabupaten : <?= $data['laporan']['nama']; ?> <br>
      Tahun : <?= $data['laporan']['tahun']; ?> <br>
      Periode : Triwulan <?= $data['laporan']['periode']; ?>
    </h5>
    
  </div>

  <div class="content">
    <style type="text/css">

</style>
<table class="tg">
  <tr>
    <th class="tg-xldj" rowspan="2">No.</th>
    <th class="tg-c3ow" rowspan="2">Komoditi</th>
    <th class="tg-0pky" rowspan="2">Tanaman <br>yang<br>dibongkar</th>
    <th class="tg-0pky" rowspan="2">Tanaman<br>baru</th>
    <th class="tg-0pky" rowspan="2">Tanaman<br>bulan<br>menghasilkan</th>
    <th class="tg-0pky" colspan="2">Tanaman produktif</th>
    <th class="tg-0pky" rowspan="2">Tanaman<br>Tua/<br>Rusak</th>
    <th class="tg-0pky blue" rowspan="2">Jumlah</th>
    <th class="tg-0pky" rowspan="2">Produksi<br>(Kuintal)</th>
    <th class="tg-0pky" rowspan="2">Harga<br>Jual<br>(Rupiah)</th>
    <th class="tg-0pky" rowspan="2">Keterangan</th>
  </tr>
  <tr>
    <td class="tg-0pky">Yang<br>menghasilkan</td>
    <td class="tg-0pky">tidak<br>menghasilkan</td>
  </tr>
  <tr>
    <td class="tg-0pky">1</td>
    <td class="tg-0pky">2</td>
    <td class="tg-0pky">3</td>
    <td class="tg-0pky">4</td>
    <td class="tg-0pky">5</td>
    <td class="tg-0pky">6</td>
    <td class="tg-0pky">7</td>
    <td class="tg-0pky">8</td>
    <td class="tg-0pky blue">9</td>
    <td class="tg-0pky">10</td>
    <td class="tg-0pky">11</td>
    <td class="tg-0pky">12</td>
  </tr>
  <?php $i = 1; foreach($data['komoditas'] as $komo): ?>
  <tr>
    <td class="tg-0pky"><?= $i; ?>.</td>
    <td class="tg-0pky"><?= $komo['komoditas']; ?></td>
    <td class="tg-0pky"><?= $komo['item1']; ?></td>
    <td class="tg-0pky"><?= $komo['item2']; ?></td>
    <td class="tg-0pky"><?= $komo['item3']; ?></td>
    <td class="tg-0pky"><?= $komo['item4']; ?></td>
    <td class="tg-0pky"><?= $komo['item5']; ?></td>
    <td class="tg-0pky"><?= $komo['item6']; ?></td>
    <?php 
    $sum = $komo['item1']+$komo['item2']+$komo['item3']+$komo['item4']+$komo['item5']+$komo['item6']+$komo['item7']; ?>
    <td class="tg-0pky blue"><?= number_format($sum); ?></td>
    <td class="tg-0pky"><?= $komo['item7']; ?></td>
    <td class="tg-0pky"><?= $komo['item8']; ?></td>
    <td class="tg-0pky"><?= $komo['item9']; ?></td>
  </tr>
  <?php $i++; endforeach; ?>
</table>

  </div>
  <div class="footer">

  <h5>
      Mengetahui,<br><br><br><br>
      _________________ <br>
    </h5>
  </div>
</body>
</html>
<?php
$laporan = ob_get_contents();
ob_clean();

$pdf = new HTML2PDF('l', 'A4', 'en');
$pdf->setDefaultFont('Arial');
$pdf->writeHTML($laporan);

$pdf->Output('Laporan.PDF', 'I'); //I:open D:download 
?>

