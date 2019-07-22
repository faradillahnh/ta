
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
      <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="box-content bg-white">
			    <h1>Daftar Resep</h1>
<hr>
					<table class="table table-hover">
			      <thead>
			        <tr>
			          <th scope="col">No</th>
			          <th scope="col">Judul Resep</th>
			          <th scope="col">Nama Pelanggan </th>
			          <th scope="col">Photo Resep </th>
			          <th scope="col">Status </th>
			          <th scope="col">Aksi</th>
			        </tr>
			      </thead>
			      <tbody>
							<?php foreach ($data_resep as $show): ?>
			        <tr>
			          <th scope="row"><?= //$show->id_resep; ?></th>
			          <td><?= //$show->nama_resep; ?></td>
			          <td><?= //$show->email_resep; ?></td>
			          <td><?= //$show->photo_resep; ?></td>
			          <td><?= //$show->photo_resep; ?></td>
			          <td><?= //$show->photo_resep; ?></td>
			          <td>
									<a href="<?= base_url('index.php/Pelanggan/deletePelangganAdmin/'.$show->id_resep); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
									<a href="<?= base_url('index.php/Pelanggan/updatePelangganAdmin/'.$show->id_resep); ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
									<a href="<?= base_url('index.php/Pelanggan/detailPelangganAdmin/'.$show->id_resep); ?>" class="btn btn-success btn-xs"><i class="fa fa-info"></i></a>
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
