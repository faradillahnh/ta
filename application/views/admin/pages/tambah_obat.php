<div id="wrapper">
	<div class="main-content">
    <div class="row small-spacing">
      <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="box-content bg-white">
          <h1>Tambah Produk Obat</h1>
			    <a href="<?= base_url('index.php/Obat/daftarObat'); ?>" class="btn btn-success btn-xs"><i class="fa fa-chevron-left"></i> Kembali</a>
          <hr>
          <form action="<?= base_url('index.php/Obat/prosesTambahObat'); ?>" method="post" enctype='multipart/form-data'>
            <div class="form-row">
							<div class="form-group col-md-12">
                <label for="inputNama">Kode Obat</label>
                <input type="text" class="form-control" name="kode" placeholder="Masukkan Kode Obat">
              </div>
              <div class="form-group col-md-12">
                <label for="inputNama">Nama Obat</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Obat">
              </div>
							<div class="form-group col-md-12">
								<label for="inputEmail">Deskripsi Obat</label>
								<input type="text" class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi Obat">
							</div>
							<div class="form-group col-md-6">
                <label for="">Satuan</label>
                <input type="text" class="form-control" name="satuan" placeholder="Masukkan Satuan Obat">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">On Hand</label>
                <input type="text" class="form-control" name="onhand" placeholder="Masukkan On Hand">
              </div>
              <div class="form-group col-md-6">
                <label for="">Min</label>
                <input type="text" class="form-control" name="min" placeholder="Masukkan Min">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Max</label>
                <input type="text" class="form-control" name="max" placeholder="Masukkan Max">
              </div>
							<div class="form-group col-md-6">
                <label for="">HJA</label>
                <input type="text" class="form-control" name="hja" placeholder="HJA">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">HJA + PPN</label>
                <input type="text" class="form-control" name="hjappn" placeholder="HJA + PPN">
              </div>
            </div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="inputAddress">Kategori Obat</label>
							<select id="kategori_obat" class="form-control" name="kategori_obat">
								<option selected> - Pilih Kategori Obat - </option>
								<?php foreach ($data_kategori as $show):?>
									<option value="<?= $show->id_kategori_obat; ?>"><?= $show->nama_kategori; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
            <div class="form-row">
							<div class="form-group col-md-12">
	              <label for="exampleFormControlFile1">File Photo Profil</label>
	              <input type="file" class="form-control-file" name="inputPhoto" id="exampleFormControlFile1">
	            </div>
            </div>
            <div class="form-group col-md-12">
              <hr>
              <button type="submit" class="btn btn-primary btn-xs">Tambah Produk Obat</button>
            </div>
          </form>
        </div>
      </div>
    </div>
	</div>
</div>
