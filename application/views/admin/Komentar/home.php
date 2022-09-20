<h1>
	<?php echo $judul;?>
	<span style="float:right;">
		<?php echo anchor('admin/komentar/add','<button>tambah data</button>');?>
	</span>
</h1>

<?php echo $this->session->flashdata("message");?>

<?php 
if (count($hasil) > 0) 
{
	$i=1;
	?>
		<table border="1" cellpadding="5" cellspacing="5" >
		<th>No</th>
		<th width="200">foto</th>
		<th width="300">nama Pelanggan</th>
		<th width="300">Komentar</th>
		<th width="600">Action</th>
	<?php
	foreach ($hasil as $key => $list)
	{
		?> 
		<tr>
			<td align="center"><?php echo $i;?></td>
			<td align="justify"> <img src="<?php echo base_url('./uploaded_files/');?><?php echo $list['KOMEN_IMAGE'];?>" width="100"></td>
			<td align="justify"><?php echo $list ['NAMA_PELANGGAN']; ?></td>
			<td align="justify"><?php echo $list ['KOMENTAR']; ?></td>
			<td align="center">
				<?php echo anchor ('admin/komentar/edit/'.$list['ID_KOMENTAR'],'<button>EDIT</button>','title="edit"'); ?> &nbsp;&nbsp;&nbsp;
				<?php $attr_del = array('onclick' => 'return confirm();','title' => 'delete');
				echo anchor ('admin/komentar/delete/'.$list['ID_KOMENTAR'],'<button>DELETE</button>',$attr_del);
				?>
			</td>
		</tr>
		<?php
		$i++;
	}
	?>
	</table>
		<?php
}
else
{
	//jika tidak ditemukan maka tamilkan ini
	?>
	<p>data tidak ada</p>
	<?php
}
?>