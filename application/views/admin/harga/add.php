<h1>
	<?php echo $judul;?>
	<span style="float:right;">
		<?php echo anchor('admin/harga','<button>kembali</button>');?>
	</span>
</h1>

<?php echo $this->session->flashdata("message");?>
<?php if ($_SERVER['REQUEST_METHOD'] == "POST") echo "$err"; ?>

<?php 
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/harga/add",$attributes);
?>
	<label for="fid_lokasi">Tujuan</label>
	<?php 
	$opsi_lokasi = $this->lokasi_model->get_drop_down();
	echo form_dropdown('fid_lokasi',$opsi_lokasi,set_value('fid_lokasi'));
	?>
	<br /> <br />
	<label for="durasi">Durasi</label>
	<input name="durasi" type="text" id="durasi" placeholder="ketikan durasi misal 1 hari" value="<?php echo set_value("durasi");?>" size="100%" required>
	<br /> <br />
	<label for="fid_jenis_armada">Jenis Kendaraan</label>
	<?php 
	$opsi_jenis_armada = $this->jenis_armada_model->get_drop_down();
	echo form_dropdown('fid_jenis_armada',$opsi_jenis_armada,set_value('fid_jenis_armada'));
	?>
	<br /><br />
	<label for="fid_kelas_armada">Kelas Kendaraan</label>
	<?php 
	$opsi_kelas_armada = $this->kelas_armada_model->get_drop_down();
	echo form_dropdown('fid_kelas_armada',$opsi_kelas_armada,set_value('fid_kelas_armada'));
	?>
	<br /><br />
	<label for="biaya">biaya</label>
	<input name="biaya" type="text" id="biaya" placeholder="ketikan biaya misal Rp 1.000.000 " value="<?php echo set_value("biaya");?>" size="100%" required>
	<br /> <br />
	<label for="keterangan">keterangan</label>
	<input name="keterangan" type="text" id="keterangan" placeholder="ketikan keterangan 
	" value="<?php echo set_value("keterangan");?>" size="100%" required>
	<br /> <br />
	<input type="submit" name="submit" value="simpan" />
<?php echo form_close();?> 