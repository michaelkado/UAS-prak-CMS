<?php  
 $bil = 1;
 while($bil > 1)
 {
  $bil++;
 }
?>
    <div id="taxis" class="taxis_section layout_padding">
      <div class="container">
        <h1 class="our_text">Armada <span style="color: #f4db31;">Kami</span></h1>
          <div class="taxis_section_2">
          <div class="row">

<?php 
      //cek apakah ada data atau tidak di database
      if (count($hasil) > 0) 
      {
        // jika terdapat data
        foreach ($hasil as $key => $list)
        {
          ?>
            <div class="col-sm-4">
              <div class="taxi_main">
                <div class="round_1"><?php echo $bil++;?></div>
                <h2 class="carol_text"><?php echo $list['TIPE_JENIS_ARMADA']; ?></h2>
                <p class="reader_text"><?php echo $list['TIPE_KELAS_ARMADA']; ?></p>
                <p class="reader_text"><?php echo $list['JUMLAH_KURSI']; ?></p>
                <div class="images_2"><a href="#"><img src="<?php echo base_url();?>uploaded_files/<?php echo $list ['ARMADA_IMAGE'];?>"alt="<?php echo $list ['ARMADA_IMAGE'];?>" style="height:200px;" ></a></div>
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
      </div>
    </div>
    </div>
    </div>