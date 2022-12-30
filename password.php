
<div class="row">
    <div class="col-sm-5 col-sm-offset-3">
        <h1>Ubah Password</h1>
        <?php if($_POST) include'aksi.php'?>
        <form method="post" action="?m=password&act=password_ubah">
        <div class="form-group">
            <label for="password_lama">Password Lama</label>
            <input class="form-control" type="password" name="pass1" placeholder="Masukan Password Lama" required />
        </div>
        <div class="form-group">
            <label for="password_baru">Password Baru</label>
            <input class="form-control" type="password" name="pass2" placeholder="Masukan Password Baru" required />
        </div>
        <div class="form-group">
            <label for="konfirmasi_password">Konfirmasi Password Baru</label>
            <input class="form-control" type="password" name="pass3" placeholder="Konfirmasi Password baru" required />
        </div>
        <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
        </form>
    </div>
</div><br>