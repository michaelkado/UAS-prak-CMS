<h1>
	<?php echo $judul;?>
	<span style="float:right;">
		<?php echo anchor('admin/armada/add','<button>tambah data</button>');?>
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
		<th width="200">Jenis kendaraan</th>
		<th width="200">Kelas Kendaraan</th>
		<th width="200">No polisi</th>
		<th width="200">No mesin</th>
		<th width="200">Masa berlaku</th>
		<th width="200">Jumlah Kursi</th>
		<th width="400">Action</th>
	<?php
	foreach ($hasil as $key => $list)
	{
		?> 
		<tr>
			<td align="center"><?php echo $i;?></td>
			<td align="justify"> <img src="<?php echo base_url('./uploaded_files/');?><?php echo $list['ARMADA_IMAGE'];?>" width="100"></td>
			<td align="justify"><?php echo $list ['TIPE_JENIS_ARMADA']; ?></td>
			<td align="justify"><?php echo $list ['TIPE_KELAS_ARMADA']; ?></td>
			<td align="justify"><?php echo $list ['NO_POLISI']; ?></td>
			<td align="justify"><?php echo $list ['NO_MESIN']; ?></td>
			<td align="justify"><?php echo $list ['MASA_BERLAKU_KENDARAAN']; ?></td>
			<td align="justify"><?php echo $list ['JUMLAH_KURSI']; ?></td>
			<td align="center">
				<?php echo anchor ('admin/armada/edit/'.$list['ID_ARMADA'],'<button>EDIT</button>','title="edit"'); ?> &nbsp;&nbsp;&nbsp;
				<?php $attr_del = array('onclick' => 'return confirm();','title' => 'delete');
				echo anchor ('admin/armada/delete/'.$list['ID_ARMADA'],'<button>DELETE</button>',$attr_del);
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