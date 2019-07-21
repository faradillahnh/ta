
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
      <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="box-content bg-white">
			    <h1>Daftar Karyawan</h1>
			    <a href="<?= base_url('index.php/Pelanggan/tambahKaryawan'); ?>" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Tambah Karyawan</a>
<hr>
					<table class="table table-hover">
			      <thead>
			        <tr>
			          <th scope="col">No</th>
			          <th scope="col">Nama Lengkap</th>
			          <th scope="col">Email </th>
			          <th scope="col">Aksi</th>
			        </tr>
			      </thead>
			      <tbody>
							<?php foreach ($data_karyawan as $show): ?>
			        <tr>
			          <th scope="row"><?= $show->id_karyawan; ?></th>
			          <td><?= $show->nama_karyawan; ?></td>
			          <td><?= $show->email_karyawan; ?></td>
			          <td>
									<a href="<?= base_url('index.php/Karyawan/deleteKaryawan/'.$show->id_karyawan); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
									<a href="<?= base_url('index.php/Karyawan/updateKaryawan/'.$show->id_karyawan); ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
									<a href="<?= base_url('index.php/Karyawan/detailKaryawan/'.$show->id_karyawan); ?>" class="btn btn-success btn-xs"><i class="fa fa-info"></i></a>
			          </td>
			        </tr>
							<?php endforeach; ?>
			      </tbody>
			    </table>
				</div>
			</div>
		</div>
	</div>
</div>
