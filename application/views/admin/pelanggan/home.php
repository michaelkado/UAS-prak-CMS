<h1>
	<?php echo $judul;?>
	<span style="float:right;">
		<?php echo anchor('admin/pelanggan/add','<button>tambah data</button>');?>
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
		<th width="200">Nama Pelanggan</th>
		<th width="300">Alamat </th>
		<th width="300">No_telfon</th>
		<th width="600">Instansi</th>
		<th width="600">Email</th>
		<th width="600">Action</th>
	<?php
	foreach ($hasil as $key => $list)
	{
		?> 
		<tr>
			<td align="center"><?php echo $i;?></td>
			<td align="justify"><?php echo $list ['NAMA_PELANGGAN']; ?></td>
			<td align="justify"><?php echo $list ['ALAMAT']; ?></td>
			<td align="justify"><?php echo $list ['NO_TLP']; ?></td>
			<td align="justify"><?php echo $list ['INSTANSI']; ?></td>
			<td align="justify"><?php echo $list ['EMAIL']; ?></td>
			<td align="center">
				<?php echo anchor ('admin/pelanggan/edit/'.$list['ID_PELANGGAN'],'<button>EDIT</button>','title="edit"'); ?> &nbsp;&nbsp;&nbsp;
				<?php $attr_del = array('onclick' => 'return confirm();','title' => 'delete');
				echo anchor ('admin/pelanggan/delete/'.$list['ID_PELANGGAN'],'<button>DELETE</button>',$attr_del);
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