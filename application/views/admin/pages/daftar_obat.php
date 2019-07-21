
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
      <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="box-content bg-white">
			    <h1>Daftar Obat</h1>
			    <a href="<?= base_url('index.php/Pelanggan/tambahObat'); ?>" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Tambah Obat</a>
<hr>
					<table class="table table-hover">
			      <thead>
			        <tr>
			          <th scope="col">No</th>
			          <th scope="col">Nama Obat</th>
			          <th scope="col">On Hand </th>
			          <th scope="col">HJA</th>
			          <th scope="col">HJA + PPN</th>
			        </tr>
			      </thead>
			      <tbody>
							<?php foreach ($data_obat as $show): ?>
			        <tr>
			          <th scope="row"><?= $show->id_obat; ?></th>
			          <td><?= $show->nama_obat; ?></td>
			          <td><?= $show->onhand; ?></td>
			          <td><?= $show->hja; ?></td>
			          <td><?= $show->hjappn; ?></td>
			          <td>
									<a href="<?= base_url('index.php/Obat/deleteObat/'.$show->id_obat); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
									<a href="<?= base_url('index.php/Obat/updateObat/'.$show->id_obat); ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
									<a href="<?= base_url('index.php/Obat/detailObat/'.$show->id_obat); ?>" class="btn btn-success btn-xs"><i class="fa fa-info"></i></a>
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
