<div id="wrapper">
	<div class="main-content">
    <div class="row small-spacing">
      <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="box-content bg-white">
          <h1>Tambah Produk Obat</h1>
			    <a href="<?= base_url('index.php/Obat/daftarObat'); ?>" class="btn btn-success btn-xs"><i class="fa fa-chevron-left"></i> Kembali</a>
          <hr>
          <form action="<?= base_url('index.php/Pelanggan/prosesTambahObat'); ?>" method="post" enctype='multipart/form-data'>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputNama">Nama Obat</label>
                <input type="text" class="form-control" name="inputNama" placeholder="Masukkan Nama Obat">
              </div>
							<div class="form-group col-md-12">
								<label for="inputEmail">Deskripsi</label>
								<input type="text" class="form-control" name="inputEmail" placeholder="Masukkan Email">
							</div>
              <div class="form-group col-md-6">
                <label for="">Password</label>
                <input type="password" class="form-control" name="inputPassword" placeholder="Password">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Konfirmasi Password</label>
                <input type="password" class="form-control" name="confirm_password" placeholder="Konfirmasi Password">
              </div>
            </div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputAddress">Provinsi</label>
							<select id="provinsi" class="form-control" name="prov">
								<option selected>Provinsi...</option>
								<?php
									foreach($provinsi as $prov)
									{
										echo '<option value="'.$prov->id.'">'.$prov->nama.'</option>';
									}
								?>
							</select>
						</div>
						<div class="form-group col-md-6">
							<label for="inputAddress">Kabupaten</label>
							<select id="kabupaten" class="form-control" name="kab">
								<option selected>Kabupaten...</option>
							</select>
						</div>
					</div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Kecamatan</label>
								<select id="kecamatan" class="form-control" name="kec">
                  <option selected>Kecamatan...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">Desa</label>
                <select id="desa" class="form-control" name="desa">
                  <option selected>Desa...</option>
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
              <button type="submit" class="btn btn-primary btn-xs">Tambah Pelanggan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
	</div>
</div>
