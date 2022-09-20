<br><br><br>
<div class="cutomer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>What is says our cutomer</h2>
                  </div>
               </div>
            </div>
<div class="cutomer">          
<?php 
      //cek apakah ada data atau tidak di database
      if (count($hasil) > 0) 
      {
        // jika terdapat data
        foreach ($hasil as $key => $list)
        {
          ?>
          <br><br>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide cutomer_Carousel " data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="cross_img">
                                    <figure><img src="<?php echo base_url();?>uploaded_files/<?php echo $list ['KOMEN_IMAGE'];?>"alt="<?php echo $list ['KOMEN_IMAGE'];?>" style="height:200px;"></figure>
                                 </div>
                                 <div class="our cross_layout">
                                    <div class="test_box">
                                       <h4><?php echo $list['NAMA_PELANGGAN']; ?></h4>
                                       <span>Rental</span>
                                       <p><?php echo $list['KOMENTAR']; ?></p>
                                       <i><img src="<?php echo base_url('aset/images/te1.png'); ?>"></i>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
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

    <!-- banner section end -->
          <!-- cutomer -->
      
      <!-- end cutomer -->