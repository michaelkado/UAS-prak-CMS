<h1>
	<?php echo $judul;?>
	<span style="float:right;">
		<?php echo anchor('admin/pemesanan','<button>kembali</button>');?>
	</span>
</h1>

<?php echo $this->session->flashdata("message");?>
<?php if ($_SERVER['REQUEST_METHOD'] == "POST") echo "$err"; ?>

<?php 
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/pemesanan/edit/".$hasil['ID_PEMESANAN'],$attributes);
?>
	<label for="nama_pelanggan">Nama Pelanggan</label>
	<?php 
	$opsi_nama = $this->pelanggan_model->get_drop_down();
	echo form_dropdown('fid_pelanggan',$opsi_nama,$hasil["ID_PELANGGAN"]);
	?>
	<br /><br />
	<label for="titik_awal">Titik Awal</label>
	<input name="titik_awal" type="text" id="titik_awal" value="<?php echo $hasil["TITIK_AWAL"];?>" size="100%" required>
	<br /> <br />
	<label for="fid_lokasi">Kota Tujuan</label>
	<?php 
	$opsi_lokasi_b = $this->lokasi_model->get_drop_down();
	echo form_dropdown('fid_lokasi',$opsi_lokasi_b,set_value('fid_lokasi'));
	?>
	<br /><br />
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
	<label for="tanggal_pesan">Tanggal Pesan</label>
	<input name="tanggal_pesan" type="date" id="tanggal_pesan" value="<?php echo $hasil["TANGGAL_PESAN"];?>" size="100%" required>
	<br /> <br />
	<label for="tanggal_berangkat">Tanggal Berangkat</label>
	<input name="tanggal_berangkat" type="date" id="tanggal_berangkat" value="<?php echo $hasil["TANGGAL_BERANGKAT"];?>" size="100%" required>
	<br /> <br />
	<label for="tanggal_pulang">Tanggal Pulang</label>
	<input name="tanggal_pulang" type="date" id="tanggal_pulang" value="<?php echo $hasil["TANGGAL_PULANG"];?>" size="100%" required>
	<br /> <br />
	<label for="jumlah_peserta">Jumlah Peserta</label>
	<input name="jumlah_peserta" type="text" id="jumlah_peserta" placeholder="ketikan Jumlah" value="<?php echo $hasil["JUMLAH_PESERTA"];?>" size="100%" required>
	<br /> <br />
	<label for="jumlah_kendaraan">Jumlah Kendaraan</label>
	<input name="jumlah_kendaraan" type="text" id="jumlah_kendaraan" placeholder="ketikan Jumlah Armada" value="<?php echo $hasil["JUMLAH_KENDARAAN"];?>" size="100%" required>
	<br /> <br />
	<label for="catatan_pelanggan">Catatan Pelanggan</label>
	<input name="catatan_pelanggan" type="text" id="catatan_pelanggan" placeholder="ketikan catatan pelanggan" value="<?php echo $hasil["CATATAN_PELANGGAN"];?>" size="100%" required>
	<br /> <br />
	<input type="submit" name="submit" value="simpan" />
<php <?php echo form_close();?> 