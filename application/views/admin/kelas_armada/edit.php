<h1>
	<?php echo $judul;?>
	<span style="float:right;">
		<?php echo anchor('admin/kelas_armada','<button>kembali</button>');?>
	</span>
</h1>

<?php echo $this->session->flashdata("message");?>
<?php if ($_SERVER['REQUEST_METHOD'] == "POST") echo "$err"; ?>

<?php 
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/kelas_armada/edit/".$hasil['ID_KELAS_ARMADA'],$attributes);
?>
	<label for="tipe_kelas_armada">Kelas Armada</label>
	<input name="tipe_kelas_armada" type="text" id="tipe_kelas_armada" placeholder="ketikan kategori, misal: Eksekutif, binsis" value="<?php echo $hasil["TIPE_KELAS_ARMADA"];?>" size="100%" required>
	<br /> <br />
	<input type="submit" name="submit" value="simpan" />
<php <?php echo form_close();?> 