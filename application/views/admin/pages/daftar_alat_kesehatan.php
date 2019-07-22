
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
      <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="box-content bg-white">
			    <h1>Daftar Pelanggan</h1>
			    <a href="<?= base_url('index.php/Pelanggan/tambahPelangganAdmin'); ?>" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Tambah Pelanggan</a>
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
							<?php foreach ($data_pelanggan as $show): ?>
			        <tr>
			          <th scope="row"><?= $show->id_pelanggan; ?></th>
			          <td><?= $show->nama_pelanggan; ?></td>
			          <td><?= $show->email_pelanggan; ?></td>
			          <td>
									<a href="<?= base_url('index.php/Pelanggan/deletePelangganAdmin/'.$show->id_pelanggan); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
									<a href="<?= base_url('index.php/Pelanggan/updatePelangganAdmin/'.$show->id_pelanggan); ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
									<a href="<?= base_url('index.php/Pelanggan/detailPelangganAdmin/'.$show->id_pelanggan); ?>" class="btn btn-success btn-xs"><i class="fa fa-info"></i></a>
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
