<h1>
	<?php echo $judul;?>
	<span style="float:right;">
		<?php echo anchor('admin/lokasi','<button>kembali</button>');?>
	</span>
</h1>

<?php echo $this->session->flashdata("message");?>
<?php if ($_SERVER['REQUEST_METHOD'] == "POST") echo "$err"; ?>

<?php 
$attributes = array('autocomplete' => 'off');
echo form_open_multipart("admin/lokasi/add",$attributes);
?>
	<label for="nama_kota">Nama Kota</label>
	<input name="nama_kota" type="text" id="nama_kota" placeholder="ketikan kategori, misal: Jogja, Jakarta, Bali,dll" value="<?php echo set_value("nama_kota");?>" size="100%" required>
	<br /> <br />
	<input type="submit" name="submit" value="simpan" />
 <?php echo form_close();?> 