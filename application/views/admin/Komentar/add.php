<h1>
	<?php echo $judul;?>
	<span style="float:right;">
		<?php echo anchor('admin/komentar','<button>kembali</button>');?>
	</span>
</h1>

<?php echo $this->session->flashdata("message");?>
<?php if ($_SERVER['REQUEST_METHOD'] == "POST") echo "$err"; ?>

<?php 
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/komentar/add",$attributes);
?>
	<label for="nama_pelanggan">Nama Pelanggan</label>
	<?php 
	$opsi_nama = $this->pelanggan_model->get_drop_down();
	echo form_dropdown('fid_pelanggan',$opsi_nama,set_value('fid_pelanggan'));
	?>
	<br /><br />
	<label for="komentar">komentar</label>
	<input name="komentar" type="text" id="komentar" placeholder="tuliskan komentar" value="<?php echo set_value("komentar");?>"size="100%" required>
	<br /><br />
	<label for="komen_image">foto</label>
	<input name="komen_image" type="file" id="komen_image" required>
	<br /><br />
	<input type="submit" name="submit" value="simpan"/>
<?php echo form_close();?> 