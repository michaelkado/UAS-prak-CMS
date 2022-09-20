<h1>
	<?php echo $judul;?>
	<span style="float:right;">
		<?php echo anchor('admin/news/add','<button>tambah data</button>');?>
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
		<th width="300">kategori</th>
		<th width="300">judul</th>
		<th width="600">Diskripsi</th>
		<th width="600">Action</th>
	<?php
	foreach ($hasil as $key => $list)
	{
		?> 
		<tr>
			<td align="center"><?php echo $i;?></td>
			<td align="justify"> <img src="<?php echo base_url('./uploaded_files/');?><?php echo $list['NEWS_IMAGE'];?>" width="100"></td>
			<td align="justify"><?php echo $list ['NEWS_CAT_NAME']; ?></td>
			<td align="justify"><?php echo $list ['NEWS_TITLE']; ?></td>
			<td align="justify"><?php echo $list ['NEWS_DESCRIPTION']; ?></td>
			<td align="center">
				<?php echo anchor ('admin/news/edit/'.$list['NEWS_ID'],'<button>EDIT</button>','title="edit"'); ?> &nbsp;&nbsp;&nbsp;
				<?php $attr_del = array('onclick' => 'return confirm();','title' => 'delete');
				echo anchor ('admin/news/delete/'.$list['NEWS_ID'],'<button>DELETE</button>',$attr_del);
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