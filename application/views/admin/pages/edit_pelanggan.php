
<div id="wrapper">
	<div class="main-content">
    <div class="row small-spacing">
      <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="box-content bg-white">
          <h1>Udpate Pelanggan</h1>
			    <a href="<?= base_url('index.php/Pelanggan/daftarPelangganAdmin'); ?>" class="btn btn-success btn-xs"><i class="fa fa-chevron-left"></i> Kembali</a>
          <hr>
          <form action="<?= base_url('index.php/Pelanggan/UpdatePelangganAdmin'); ?>" method="post" enctype='multipart/form-data'>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputNama">Nama Lengkap</label>
                <input type="text" class="form-control" name="inputNama" placeholder="Masukkan Nama Lengkap Pelanggan" value="<?= $pelanggan->nama_pelanggan;?>">
              </div>
							<div class="form-group col-md-12">
								<label for="inputEmail">Email</label>
								<input type="text" class="form-control" name="inputEmail" placeholder="Masukkan Email" value="<?= $pelanggan->email_pelanggan;?>">
							</div>
              <div class="form-group col-md-6">
                <label for="">Password</label>
                <input type="password" class="form-control" name="inputPassword" placeholder="Password" value="<?= $pelanggan->password_pelanggan;?>">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Konfirmasi Password</label>
                <input type="password" class="form-control" name="confirm_password" placeholder="Konfirmasi Password">
              </div>
            </div>
            <div class="form-group col-md-12">
              <label for="inputAddress">Nama Jalan</label>
              <input type="text" class="form-control" name="inputJalan" placeholder="Nama Jalan (Cth: Jln. Ring Road Utara No 34)" value="<?= $pelanggan->alamat_pelanggan;  ?>">
            </div>
						<div class="form-group col-md-12">
              <label for="inputAddress">Provinsi</label>
							<select id="inputState" class="form-control">
								<option selected>Provinsi...</option>
								<option>...</option>
							</select>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Kabupaten</label>
								<select id="inputState" class="form-control">
                  <option selected>Kabupaten...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">Kecamatan</label>
                <select id="inputState" class="form-control">
                  <option selected>Kecamatan...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Kode Pos</label>
                <input type="text" class="form-control" id="inputKodePos">
              </div>
            </div>
            <div class="form-group col-md-12">
              <label for="exampleFormControlFile1">File Photo Profil</label>
              <input type="file" class="form-control-file" name="inputPhoto" id="exampleFormControlFile1">
            </div>
            <div class="form-group col-md-12">
              <hr>
              <button type="submit" class="btn btn-primary btn-xs">Update Pelanggan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
	</div>
</div>
