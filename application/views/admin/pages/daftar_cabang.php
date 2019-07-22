
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
      <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="box-content bg-white">
			    <h1>Daftar Cabang</h1>
			    <a href="<?= base_url('index.php/Cabang/tambahCabang'); ?>" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Tambah Cabang</a>
<hr>
					<table class="table table-hover">
			      <thead>
			        <tr>
			          <th scope="col">No</th>
			          <th scope="col">Nama Cabang</th>
			          <th scope="col">Alamat Cabang </th>
			          <th scope="col">Aksi</th>
			        </tr>
			      </thead>
			      <tbody>
							<?php foreach ($data_cabang as $show): ?>
			        <tr>
			          <th scope="row"><?= $show->id_cabang; ?></th>
			          <td><?= $show->nama_cabang; ?></td>
			          <td><?= $show->alamat_cabang; ?></td>
			          <td>
									<a href="<?= base_url('index.php/Pelanggan/deletePelangganAdmin/'.$show->id_cabang); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
									<a href="<?= base_url('index.php/Pelanggan/updatePelangganAdmin/'.$show->id_cabang); ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
									<a href="<?= base_url('index.php/Pelanggan/detailPelangganAdmin/'.$show->id_cabang); ?>" class="btn btn-success btn-xs"><i class="fa fa-info"></i></a>
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
