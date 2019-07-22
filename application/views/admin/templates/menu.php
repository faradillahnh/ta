<div class="main-menu">
	<header class="header">
		<a href="<?= base_url('index.php/admin');  ?>" class="logo"><img src="images/logo/logo.png" alt=""> PHARM24</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
		<div class="user">
			<a href="#" class="avatar"><img src="assets/images/avatar-sm-5.jpg" alt=""><span class="status online"></span></a>
			<h5 class="name"><a href="profile.html">Nama admin</a></h5>
			<h5 class="position">Posisi Karyawan</h5>
			<div class="control-wrap js__drop_down">
				<i class="fa fa-caret-down js__drop_down_button"></i>
				<div class="control-list">
					<div class="control-item"><a href="profile.html"><i class="fa fa-user"></i> Profil</a></div>
					<div class="control-item"><a href="#"><i class="fa fa-gear"></i> Pengaturan</a></div>
					<div class="control-item"><a href="#"><i class="fa fa-sign-out"></i> Keluar</a></div>
				</div>
			</div>
		</div>
	</header>
	<div class="content">
		<div class="navigation">
      <h5 class="title">Manajemen Pesanan</h5>
			<ul class="menu js__accordion">
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="fa fa-book fa-lg"></i><span> Pesanan Obat</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="<?= base_url('index.php/PesananObat/daftarPesananObat');?>">Pesanan Obat Masuk</a></li>
					</ul>
				</li>
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="fa fa-book fa-lg"></i><span> Pesanan Resep</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="<?= base_url('index.php/Resep/daftarResep');?>">Resep Diajukan</a></li>
					</ul>
				</li>
			</ul>
			<h5 class="title">Manajemen Produk</h5>
			<ul class="menu js__accordion">
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="fa fa-user fa-lg"></i><span>Obat</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="<?= base_url('index.php/Obat/daftarObat');?>">Daftar Obat</a></li>
						<li><a href="<?= base_url('index.php/Obat/tambahObat');?>">Tambah Obat</a></li>
					</ul>
				</li>

				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="fa fa-database fa-lg"></i><span> Alat Kesehatan</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="<?= base_url('index.php/');?>">Daftar Alat Kesehatan</a></li>
						<li><a href="<?= base_url('index.php/');?>">Tambah Alat Kesehatan</a></li>
					</ul>
				</li>
			</ul>
      <h5 class="title">Manajemen Cabang</h5>
			<ul class="menu js__accordion">
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="fa fa-building fa-lg"></i><span> Cabang</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="<?= base_url('index.php/Cabang/daftarCabang');?>">Daftar Cabang</a></li>
						<li><a href="<?= base_url('index.php/Cabang/tambahCabang');?>">Tambah Cabang</a></li>
					</ul>
				</li>
			</ul>
			<h5 class="title">Manajemen Pengguna</h5>
			<ul class="menu js__accordion">
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="fa fa-users fa-lg"></i><span> Pelanggan</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="<?= base_url('index.php/Pelanggan/daftarPelangganAdmin'); ?>">Daftar Pelanggan</a></li>
						<li><a href="<?= base_url('index.php/Pelanggan/tambahPelangganAdmin'); ?>">Tambah Pelanggan</a></li>
					</ul>
				</li>
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="fa fa-users fa-lg"></i><span> Karyawan</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="<?= base_url('index.php/Karyawan/daftarKaryawan');?>">Daftar Karyawan</a></li>
						<li><a href="<?= base_url('index.php/Karyawan/tambahKaryawan');?>">Tambah Karyawan</a></li>
					</ul>
				</li>
			</ul>
			<h5 class="title">Manajemen Pengiriman</h5>
			<ul class="menu js__accordion">
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="fa fa-money fa-lg"></i><span> Tarif Pengiriman</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="<?= base_url('index.php/TarifPengiriman/daftarTarifPengiriman');?>">Daftar Tarif Pengiriman</a></li>
						<li><a href="<?= base_url('index.php/TarifPengiriman/tambahTarifPengiriman');?>">Tambah Tarif Pengiriman</a></li>
					</ul>
				</li>
			</ul>
			<h5 class="title">Manajemen Konten Blog</h5>
				<ul class="menu js__accordion">
					<li><a href="<?= base_url('index.php/Blog/daftarKontenBlog');?>">Daftar Konten Blog</a></li>
					<li><a href="<?= base_url('index.php/Blog/tambahKontenBlog');?>">Tambah Konten Blog</a></li>
				</ul>
      <h5 class="title">Manajemen Laporan</h5>
			<ul class="menu js__accordion">
				<li><a href="<?= base_url('index.php/');?>">Laporan Penjualan Obat</a></li>
				<li><a href="<?= base_url('index.php/');?>">Laporan Stok Barang</a></li>
			</ul>
		</div>
	</div>
</div>
