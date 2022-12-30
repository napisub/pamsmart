<!-- hasil ranking -->
<section class="alternatif" id="alternatif">
<div class="container">
  <div class="row">
    <h1 class="text-center">Alternatif</h1>
    <hr>
<?php
$c = $db->get_results("SELECT * FROM tb_rel_alternatif WHERE nilai < 0 ");
if (!$ALTERNATIF || !$KRITERIA):
    echo "Tampaknya anda belum mengatur alternatif dan kriteria. Silahkan tambahkan minimal 3 alternatif dan 3 kriteria.";
elseif ($c):
    echo "Tampaknya anda belum mengatur nilai alternatif. Silahkan atur pada menu <strong>Nilai Alternatif</strong>.";
else:
    $bobot_kriteria = get_bobot_kriteria();
    $normal_kriteria = get_normal_kriteria($bobot_kriteria);
    $data = get_hasil_analisa();    
    $terbobot = get_terbobot($data, $normal_kriteria);
               
    $total = get_total($terbobot);
    $rank = get_rank($total);   
?>
<!-- <div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Normalisasi Kriteria</h3>
    </div>
    <div class="table-responsive"> 
        <table class="table table-bordered table-striped table-hover nw">
        <thead><tr>
            <th></th>
            <?php foreach(current($data) as $key => $val):?>
            <th><?=$KRITERIA[$key][nama_kriteria]?></th>           
            <?php endforeach?>
            <th>Total</th>
        </tr></thead>        
        <tr>
            <th>Bobot</th>
            <?php foreach($bobot_kriteria as $key => $val):?>
            <td><?=$val?></td>
            <?php endforeach?>
            <td><?=array_sum($bobot_kriteria)?></td>
        </tr>     
        <tr>
            <th>Bobot Normal</th>
            <?php foreach($normal_kriteria as $key => $val):?>
            <td><?=round($val, 4)?></td>
            <?php endforeach?>
            <td><?=array_sum($normal_kriteria)?></td>
        </tr>    
        </table>
    </div>
</div> -->

<!-- div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Data Alternatif</h3>
    </div>
    <div class="table-responsive"> 
        <table class="table table-bordered table-striped table-hover nw">
        <thead><tr>
            <th></th>
            <?php foreach(current($data) as $key => $val):?>
            <th><?=$KRITERIA[$key][nama_kriteria]?></th>           
            <?php endforeach?>
        </tr></thead>
        <?php foreach($data as $key => $val):?>
        <tr>
            <th><?=$ALTERNATIF[$key]?></th>
            <?php foreach($val as $k => $v):?>
                <td><?=$v?></td>
            <?php endforeach?>
        </tr>    
        <?php endforeach?>
        </table>
    </div>
</div> -->

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Hasil Perhitungan Calon</h3>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
        <thead><tr>
            <th></th>
            <?php foreach(current($terbobot) as $key => $val):?>
            <!-- <th><?=$key?></th>            -->
            <?php endforeach?>
            <th>Total</th>
            <th>Rank</th>
        </tr></thead>
        <?php foreach($terbobot as $key => $val):?>
        <tr>
            <th><?=$ALTERNATIF[$key]?></th>
            <?php foreach($val as $k => $v):?>
            <!-- <td><?=round($v, 4)?></td> -->
            <?php endforeach?>
            <td><?=round($total[$key], 4)/100?></td>
            <td><?=$rank[$key]?></td>
        </tr>    
        <?php 
        $db->query("UPDATE tb_alternatif SET total='$total[$key]', rank='$rank[$key]' WHERE kode_alternatif='$key'");
        endforeach?>
        </table>
    </div>
    <div class="panel-body">
        <a class="btn btn-default" target="_blank" href="cetak.php?m=hitung"><span class="glyphicon glyphicon-print"></span> Cetak</a>
    </div>
</div><br>
<?php endif?>
</div>
</div>
</section>
<!-- akhir ranking -->


<!-- about -->
<section class="about" id="about">
    <div class="container">
     <div class="row">
         <h1 class="text-center">About</h1>
         <hr>
          <div class="col-sm-5 col-sm-offset-1 text-justify">
              <p class="pKiri"><b>Pasal 1:</b><br>
                1. Persekutuan Anggota muda Gereja Kristen Injili di Tanah Papua (PAM GKI)
                adalah: "Organisasi yang berbentuk wadah pelayanan dan pembinaan bagi
                kaum mmuda dan tidak mempunyai Anggaran Dasar dan Anggaran Rumah Tangga (AD-ART). <br>
                2. PAM GKI adalah bagian Integral (yang tak dapat dipisahkan) dari Gereja
                dipanggil dan diutus turut berperan serta mengembangkan misi Kerajaan Allah. <br>
                <b>Pasal 2:</b><br>
                1. Alkitab yang adalah Firman Tuhan. <br>
                2. Tata Gereja GKI di Tanah Papua. <br>
                3. Keputusan-keputusan Sidang Gerejawi. <br>
                4. Pedoman Pelayanan PAM GKI di Tanah Papua. <br>
                <b>Pasal 3:</b><br>
                 PAM GKI mempunyai Visi Kerajaan Allah dalam hidup Bersekutu, Bersaksi dan Melayani. </p>
          </div>
          <div class="col-sm-5 text-justify">
              <p class="pKanan"><b>Pasal 4:</b><br>
                Misi PAM GKI adalah Menjadi teladan bagi semua orang (I Timotius 4:12). <br>
                <b>Pasal 5:</b><br>
                Tujuan pembinaan PAM GKI: <br>
                1. Pelayanan dan pemberitaan Firman Tuhan dapat diarahkan secara khusus sehingga mudah diterima,
                 supaya Anggota PAM GKI mudah digiatkan. <br>
                2. Mempersiapkan Anggota PAM GKI yang bertanggung jawab agar dapat menjadi teladan bagi semua orang.  </p>
          </div>
         </div>
        </div>
</section>
 <!-- akhir about -->

<!-- portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>Portfolio</h2>
              <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/6.jpg">  
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/7.jpg">  
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/9.jpg">  
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/8.jpg">  
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/10.jpg">  
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/11.jpg">  
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir portfolio -->

<!-- contact -->


    <section class="contact" id="contact">
     
        <div class="row">
         <div class="col-sm-12 text-center">
           <h2>Contact</h2>
           <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-5 col-sm-offset-4">
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" class="form-control" placeholder="masukan nama">
              </div>
              <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" class="form-control" placeholder="masukan email anda">
              </div>
              <div class="form-group">
                <label for="telp">Telepon</label>
                <input type="tel" id="telp" class="form-control" placeholder="masukan no telepon">
              </div>
              <select class="form-control">
                <option>--Pilih Kategori</option>
                <option>Program PAM</option>
                <option>Jadwal Ibadah</option>
              </select>
              <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea class="form-control" rows="10" placeholder="masukan pesan"></textarea>
              </div>
            </form>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
          </div>
        </div>
    
    </section>

<!-- akhir contact -->
