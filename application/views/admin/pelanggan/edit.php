<h1>
	<?php echo $judul;?>
	<span style="float:right;">
		<?php echo anchor('admin/pelanggan','<button>kembali</button>');?>
	</span>
</h1>

<?php echo $this->session->flashdata("message");?>
<?php if ($_SERVER['REQUEST_METHOD'] == "POST") echo "$err"; ?>

<?php 
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/pelanggan/edit/".$hasil['ID_PELANGGAN'],$attributes);
?>
	<label for="nama_pelanggan">Nama Pelanggan</label>
	<input name="nama_pelanggan" type="text" id="nama_pelanggan" placeholder="ketikan nama Pelanggan misal amri,rudi" value="<?php echo $hasil["NAMA_PELANGGAN"];?>" size="100%" required>
	<br /> <br />
	<label for="alamat">Alamat</label>
	<input name="alamat" type="text" id="alamat" placeholder="ketikan alamat misal jalan nangka" value="<?php echo $hasil["ALAMAT"];?>" size="100%" required>
	<br /> <br />
	<label for="no_tlp">no_telfon</label>
	<input name="no_tlp" type="text" id="no_tlp" placeholder="ketikan no_telfon Misal 0812123467890 " value="<?php echo $hasil["NO_TLP"];?>" size="100%" required>
	<br /> <br />
	<label for="instansi">Instansi</label>
	<input name="instansi" type="text" id="instansi" placeholder="ketikan Instansi misal Sekolah" value="<?php echo $hasil["INSTANSI"];?>" size="100%" required>
	<br /> <br />
	<label for="email">Email</label>
	<input name="email" type="email" id="email" placeholder="ketikan email misal andong@email.com" value="<?php echo $hasil["EMAIL"];?>" size="100%" required>
	<br /> <br />
	<input type="submit" name="submit" value="simpan" />
<php <?php echo form_close();?> 