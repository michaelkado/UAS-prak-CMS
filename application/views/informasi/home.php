
    <!-- why ride section start -->
    <div id="booking" class="ride_section layout_padding">
      <div class="container">
        <div class="ride_main">
          <h1 class="ride_text"><br>
          <h1 class="ride_text">Berita <span style="color: #f4db31;"> Kita Kemana</span></h1>
      </div>
        </div>
    </div>

<?php 
      //cek apakah ada data atau tidak di database
      if (count($hasil) > 0) 
      {
        // jika terdapat data
        foreach ($hasil as $key => $list)
        {
          ?>
<div class="ride_section_2 layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="image_3"><img class="imgl borderedbox inspace=5" src="<?php echo base_url();?>uploaded_files/<?php echo $list ['NEWS_IMAGE'];?>"alt="<?php echo $list ['NEWS_IMAGE'];?>" style="height:200px;" >
            </div>
          </div>
          <div class="col-sm-8">
          <h1 class="cabe_text"> CATEGORY <?php echo $list['NEWS_CAT_NAME']; ?></h1>
          <h1 class="cabe_text"> <?php echo $list['NEWS_TITLE']; ?></h1>
          <p class="long_text"><?php echo $list['NEWS_DESCRIPTION']; ?></p>
          <div class="book_bt_2"><p><?php echo anchor('informasi/detail/'.$list['NEWS_ID'],'Read More....');?></p></div>
          <div class="clear" style="margin-bottom: 50px;"></div>
          </div>
        </div>
      </div>
    </div>
        <?php
        }
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