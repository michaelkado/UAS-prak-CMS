<h1>
	<?php echo $judul;?>
	<span style="float:right;">
		<?php echo anchor('admin/jenis_armada','<button>kembali</button>');?>
	</span>
</h1>

<?php echo $this->session->flashdata("message");?>
<?php if ($_SERVER['REQUEST_METHOD'] == "POST") echo "$err"; ?>

<?php 
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/jenis_armada/edit/".$hasil['ID_JENIS_ARMADA'],$attributes);
?>
	<label for="tipe_jenis_armada">Jenis Armada</label>
	<input name="tipe_jenis_armada" type="text" id="tipe_jenis_armada" placeholder="ketikan kategori, misal: Bigbus, Medium Bus" value="<?php echo $hasil["TIPE_JENIS_ARMADA"];?>" size="100%" required>
	<br /> <br />
	<input type="submit" name="submit" value="simpan" />
<php <?php echo form_close();?> 