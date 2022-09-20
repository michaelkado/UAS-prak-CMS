<h1>
	<?php echo $judul;?>
	<span style="float:right;">
		<?php echo anchor('admin/harga/add','<button>tambah data</button>');?>
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
		<th width="200">Tujuan </th>
		<th width="200">Durasi</th>
		<th width="200">Jenis Kendaraan</th>
		<th width="200">Kelas Kendaraan</th>
		<th width="200">Biaya</th>
		<th width="200">Keterangan</th>
		<th width="600">Action</th>
	<?php
	foreach ($hasil as $key => $list)
	{
		?> 
		<tr>
			<td align="center"><?php echo $i;?></td>
			<td align="justify"><?php echo $list ['NAMA_KOTA']; ?></td>
			<td align="justify"><?php echo $list ['DURASI']; ?></td>
			<td align="justify"><?php echo $list ['TIPE_JENIS_ARMADA']; ?></td>
			<td align="justify"><?php echo $list ['TIPE_KELAS_ARMADA']; ?></td>
			<td align="justify"><?php echo $list ['BIAYA']; ?></td>
			<td align="justify"><?php echo $list ['KETERANGAN']; ?></td>
			<td align="center">
				<?php echo anchor ('admin/harga/edit/'.$list['ID_HARGA'],'<button>EDIT</button>','title="edit"'); ?> &nbsp;&nbsp;&nbsp;
				<?php $attr_del = array('onclick' => 'return confirm();','title' => 'delete');
				echo anchor ('admin/harga/delete/'.$list['ID_HARGA'],'<button>DELETE</button>',$attr_del);
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