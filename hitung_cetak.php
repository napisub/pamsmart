
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/lumen-bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/general.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.cs">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading text-center"><img src="img/pamklasis.jpg" width="30" height="30" alt=""><br>Hasil Perhitungan <br> Pemilihan Badan Pelayan PAM <br> GKI KLASIS PORT NUMBAY <hr></div>

      <!-- Table -->
      <table class="table">
        <thead>
            <tr>
                <th>Rank</th>
                <th>Kode</th>
                <th>Nama Alternatif</th>
                <th>Total</th>
            </tr>
        </thead>
        <?php
        $q = esc_field($_GET['q']);
        $rows = $db->get_results("SELECT * FROM tb_alternatif WHERE nama_alternatif LIKE '%$q%' ORDER BY rank");
        $no=0;

        foreach($rows as $row):?>
            <tr>
                <td><?=$row->rank?></td>
                <td><?=$row->kode_alternatif?></td>
                <td><?=$row->nama_alternatif?></td>
                <td><?=round($row->total, 4)?></td>
            </tr>
        <?php endforeach;?>
    </table>
</div>

</body>
</html>




