<br><br>
    <!-- why ride section start -->
    <div id="booking" class="ride_section layout_padding">
      <div class="container">
        <div class="ride_main">
          <h1 class="ride_text"><br>
          <h1 class="ride_text">Detail <span style="color: #f4db31;"> Kita Kemana</span></h1>
      </div>
        </div>
    </div>
			<?php 
			//cek apakah ada data atau tidak di database
			if (count($hasil) > 0) 
			{
					?>
					<div class="ride_section_2 layout_padding">
      				<div class="container">
        			<div class="row">
        				<table>
        					<tr>
        						<th>
        							<h2 style="center"> <?php echo $hasil['NEWS_TITLE']; ?></h2>
        						</th>
        					</tr>
						<tr>
							<th>
								<center>
							<div class="image_3"><img class="imgl borderedbox inspace=5" src="<?php echo base_url();?>uploaded_files/<?php echo $hasil ['NEWS_IMAGE'];?>"alt="<?php echo $hasil ['NEWS_IMAGE'];?>"style="height:400px;"></div>
						</center></th></tr>
						<tr>
							<td><p><?php echo $hasil['NEWS_DESCRIPTION']; ?></p></td>
						</tr>
						<tr>
							<td><div class="book_bt_2"><p><?php echo anchor('informasi','back');?></p></div></td>
						</tr>
					</table>
					
				<?php
				}
			else
			{
				// jika tidak terdapat data
				?>
				<h1>Data tidak ditemukan.....</h1>
				<?php
			}
			?>
		</div>
		<div class="clear"></div>
	</main>
</div>