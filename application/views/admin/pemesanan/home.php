<h1>
	<?php echo $judul;?>
	<span style="float:right;">
		<?php echo anchor('admin/pemesanan/add','<button>tambah data</button>');?>
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
		<th width="200">Titik Awal</th>
		<th width="200">Kota Ahkir</th>
		<th width="200">Jenis Kendaraan</th>
		<th width="200">Kelas Kendaraan</th>
		<th width="200">Tanggal Pesan</th>
		<th width="200">Tanggal Berangkat</th>
		<th width="200">Tanggal Pulang</th>
		<th width="200">Jumlah Peserta </th>
		<th width="200">Jumlah Kendaraan</th>
		<th width="200">Catatan Pelanggan</th>
		<th width="600">Action</th>
	<?php
	foreach ($hasil as $key => $list)
	{
		?> 
		<tr>
			<td align="center"><?php echo $i;?></td>
			<td align="justify"><?php echo $list ['NAMA_PELANGGAN']; ?></td>
			<td align="justify"><?php echo $list ['TITIK_AWAL']; ?></td>
			<td align="justify"><?php echo $list ['NAMA_KOTA']; ?></td>
			<td align="justify"><?php echo $list ['TIPE_JENIS_ARMADA']; ?></td>
			<td align="justify"><?php echo $list ['TIPE_KELAS_ARMADA']; ?></td>
			<td align="justify"><?php echo $list ['TANGGAL_PESAN']; ?></td>
			<td align="justify"><?php echo $list ['TANGGAL_BERANGKAT']; ?></td>
			<td align="justify"><?php echo $list ['TANGGAL_PULANG']; ?></td>
			<td align="justify"><?php echo $list ['JUMLAH_PESERTA']; ?></td>
			<td align="justify"><?php echo $list ['JUMLAH_KENDARAAN']; ?></td>
			<td align="justify"><?php echo $list ['CATATAN_PELANGGAN']; ?></td>
			<td align="center">
				<?php echo anchor ('admin/pemesanan/edit/'.$list['ID_PEMESANAN'],'<button>EDIT</button>','title="edit"'); ?> &nbsp;&nbsp;&nbsp;
				<?php $attr_del = array('onclick' => 'return confirm();','title' => 'delete');
				echo anchor ('admin/pemesanan/delete/'.$list['ID_PEMESANAN'],'<button>DELETE</button>',$attr_del);
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