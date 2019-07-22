
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
      <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="box-content bg-white">
			    <h1>Daftar Blog Konten</h1>
			    <a href="<?= base_url('index.php/Blog/tambahBlogKonten'); ?>" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Tambah Blog Konten</a>
<hr>
					<table class="table table-hover">
			      <thead>
			        <tr>
			          <th scope="col">No</th>
			          <th scope="col">Judul</th>
			          <th scope="col">Konten Blog</th>
			          <th scope="col">Aksi</th>
			        </tr>
			      </thead>
			      <tbody>
							<?php foreach ($data_blog as $show): ?>
			        <tr>
			          <th scope="row"><?= $show->id_blog_konten; ?></th>
			          <td><?= $show->judul_blog_konten; ?></td>
			          <td><?= $show->konten; ?></td>
			          <td>
									<a href="<?= base_url('index.php/Blog/deleteBlogKonten/'.$show->id_blog_konten); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
									<a href="<?= base_url('index.php/Blog/updateBlogKonten/'.$show->id_blog_konten); ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
									<a href="<?= base_url('index.php/Blog/detailBlogKonten/'.$show->id_blog_konten); ?>" class="btn btn-success btn-xs"><i class="fa fa-info"></i></a>
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
