<h1>
	<?php echo $judul;?>
	<span style="float:right;">
		<?php echo anchor('admin/news_cat/add','<button>tambah data</button>');?>
	</span>
</h1>

<?php echo $this->session->flashdata("message");?>

<?php 
if (count($hasil) > 0) 
{
	$i=1;
	?>
		<table border="1" cellpadding="5" cellspacing="5">
			<th>No.</th>
			<th width="300">News Category Name</th>
			<th width="600">Action</th>
			<?php
			foreach ($hasil as $key => $list)
			{
				?>
				<tr>
					<td align="center"><?php echo $i;?></td>
					<td align="justify"><?php echo $list['NEWS_CAT_NAME'];?></td>
					<td align="center">
						<?php echo anchor ('admin/news_cat/edit/'.$list['NEWS_CAT_ID'],'<button>edit</button>','title="edit"');?> &ensp;&ensp;&ensp;
						<?php $attr_del = array('onclick' => 'return confirm();','title' => 'delete');
						echo anchor('admin/news_cat/delete/'.$list['NEWS_CAT_ID'],'<button>Delete</button>',$attr_del);
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