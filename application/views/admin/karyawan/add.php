<h1>
	<?php echo $judul;?>
	<span style="float:right;">
		<?php echo anchor('admin/karyawan','<button>kembali</button>');?>
	</span>
</h1>

<?php echo $this->session->flashdata("message");?>
<?php if ($_SERVER['REQUEST_METHOD'] == "POST") echo "$err"; ?>

<?php 
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/karyawan/add",$attributes);
?>
	<label for="nama_karyawan">Nama Karyawan</label>
	<input name="nama_karyawan" type="text" id="nama_karyawan" placeholder="ketikan nama karyawan misal amri,rudi" value="<?php echo set_value("nama_karyawan");?>" size="100%" required>
	<br /> <br />
	<label for="ttl">Tempat Tanggal Lahir</label>
	<input name="ttl" type="text" id="ttl" placeholder="ketikan Tempat Tanggal Lahir misal semarang,31 Desember 1999" value="<?php echo set_value("ttl");?>" size="100%" required>
	<br /> <br />
	<label for="umur">Umur</label>
	<input name="umur" type="text" id="umur" placeholder="ketikan umur misal 29" value="<?php echo set_value("umur");?>" size="100%" required>
	<br /> <br />
	<label for="alamat">Alamat</label>
	<input name="alamat" type="text" id="alamat" placeholder="ketikan alamat misal jalan nangka" value="<?php echo set_value("alamat");?>" size="100%" required>
	<br /> <br />
	<label for="jabatan">Jabatan</label>
	<input name="jabatan" type="text" id="jabatan" placeholder="ketikan jabatan misal staf" value="<?php echo set_value("alamat");?>" size="100%" required>
	<br /> <br />
	<input type="submit" name="submit" value="simpan" />
<?php echo form_close();?> 