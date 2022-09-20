<h1>
	<?php echo $judul;?>
	<span style="float:right;">
		<?php echo anchor('admin/karyawan/add','<button>tambah data</button>');?>
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
		<th width="200">Nama Karyawan</th>
		<th width="300">Tanggal Lahir </th>
		<th width="300">Umur</th>
		<th width="600">Alamat</th>
		<th width="600">jabatan</th>
		<th width="600">Action</th>
	<?php
	foreach ($hasil as $key => $list)
	{
		?> 
		<tr>
			<td align="center"><?php echo $i;?></td>
			<td align="justify"><?php echo $list ['NAMA_KARYAWAN']; ?></td>
			<td align="justify"><?php echo $list ['TTL']; ?></td>
			<td align="justify"><?php echo $list ['UMUR']; ?></td>
			<td align="justify"><?php echo $list ['ALAMAT']; ?></td>
			<td align="justify"><?php echo $list ['JABATAN']; ?></td>
			<td align="center">
				<?php echo anchor ('admin/karyawan/edit/'.$list['ID_KARYAWAN'],'<button>EDIT</button>','title="edit"'); ?> &nbsp;&nbsp;&nbsp;
				<?php $attr_del = array('onclick' => 'return confirm();','title' => 'delete');
				echo anchor ('admin/karyawan/delete/'.$list['ID_KARYAWAN'],'<button>DELETE</button>',$attr_del);
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