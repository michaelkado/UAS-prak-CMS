<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>aset/css/admin.css">
</head>
<body>

<div id="container">
	<h1><?php echo $judul; ?></h1>

	<h4>
		&nbsp;&nbsp;
		<?php echo anchor('admin/home', ' HOME '); ?> ||
		<?php echo anchor('admin/news_cat', ' INFORMATION CATEGORY '); ?> ||
		<?php echo anchor('admin/news', ' INFORMATION '); ?> ||
		<?php echo anchor('admin/karyawan', ' KARYAWAN '); ?> ||
		<?php echo anchor('admin/pelanggan', ' PELANGGAN '); ?> ||
		<?php echo anchor('admin/lokasi', ' LOKASI '); ?> ||
		<?php echo anchor('admin/jenis_armada', ' JENIS ARMADA '); ?> ||
		<?php echo anchor('admin/kelas_armada', ' KELAS ARMADA '); ?> ||
		<?php echo anchor('admin/armada', ' ARMADA '); ?> ||
		<?php echo anchor('admin/pemesanan', ' PEMESANAN '); ?> ||
		<?php echo anchor('admin/komentar', ' KOMENTAR '); ?> ||
		<?php echo anchor('admin/harga', ' HARGA '); ?> ||
		<?php echo anchor('admin/login/logout', ' LOGOUT '); ?>
	</h4>

	<div id="body">
		<?php echo $konten; ?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>


</body>
</html>