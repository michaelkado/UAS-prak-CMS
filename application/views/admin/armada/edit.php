<h1>
	<?php echo $judul;?>
	<span style="float:right;">
		<?php echo anchor('admin/armada','<button>kembali</button>');?>
	</span>
</h1>

<?php echo $this->session->flashdata("message");?>
<?php if ($_SERVER['REQUEST_METHOD'] == "POST") echo "$err"; ?>

<?php 
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/armada/edit/".$hasil['ID_ARMADA'],$attributes);
?>
	<label for="fid_jenis_armada">Jenis Kendaraan</label>
	<?php 
	$opsi_jenis_armada = $this->jenis_armada_model->get_drop_down();
	echo form_dropdown('fid_jenis_armada',$opsi_jenis_armada,$hasil['ID_JENIS_ARMADA']);
	?>
	<br /><br />
	<label for="fid_kelas_armada">Kelas Kendaraan</label>
	<?php 
	$opsi_kelas_armada = $this->kelas_armada_model->get_drop_down();
	echo form_dropdown('fid_kelas_armada',$opsi_kelas_armada,$hasil['ID_KELAS_ARMADA']);
	?>
	<br /><br />
	<label for="no_polisi">No Polisi</label>
	<input name="no_polisi" type="text" id="no_polisi" placeholder="tuliskan no_polisi kendaraan" value="<?php echo $hasil["NO_POLISI"];?>"size="100%" required>
	<br /><br />
	<label for="no_mesin">No Mesin</label>
	<input name="no_mesin" type="text" id="no_mesin" placeholder="tuliskan no mesin kendaraan" value="<?php echo $hasil["NO_MESIN"];?>"size="100%" required>
	<br /><br />
	<label for="masa_berlaku_kendaraan">Masa Berlaku Kendaraan</label>
	<input name="masa_berlaku_kendaraan" type="text" id="masa_berlaku_kendaraan" placeholder="tuliskan masa berlaku kendaraan" value="<?php echo $hasil["MASA_BERLAKU_KENDARAAN"];?>"size="100%" required>
	<br /><br />
	<label for="jumlah_kursi">Jumlah Kursi</label>
	<input name="jumlah_kursi" type="text" id="jumlah_kursi" placeholder="tuliskan jumlah kursi misal konfigurasi 2-2 40 seat " value="<?php echo $hasil["JUMLAH_KURSI"];?>"size="100%" required>
	<br /><br />
	<label for="armada_image">foto</label>
<img src="<?php echo base_url();?>uploaded_files/<?php echo $hasil ['ARMADA_IMAGE'];?>"width="100"><br />
	<input name="armada_image" type="file" id="armada_image" required>
	<br /><br />
	<input type="submit" name="submit" value="simpan"/>
<php <?php echo form_close();?> 